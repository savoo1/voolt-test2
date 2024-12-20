<?php
function get_current_env(){
    $current_url = $_SERVER['HTTP_HOST'];

    switch ($current_url) {
        case 'staging.voolt.com':
            return 'staging';
            break;
        case 'dev.voolt.com':
            return 'development';
            break;
        default:
            return 'production';
    }
}

function get_clean_path(){
    // Get the full request URI (including query string)
    $request_uri = $_SERVER['REQUEST_URI'];

    // Parse the URI to extract the path and query string
    $url_path = parse_url($request_uri, PHP_URL_PATH);
    $query_string = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : ''; // Contains UTM parameters or other query strings

    // Optional: Clean up the path (remove leading/trailing slashes if needed)
    $clean_path = trim($url_path, '/');

    // Log or Debug (optional)
    // echo "Request URI: $request_uri\n";
    // echo "URL Path: $clean_path\n";
    // echo "Query String: $query_string\n";

    if($clean_path == '') {
        $clean_path = 'home';
    }

    return $clean_path;
}

function get_app_url(){
    switch (get_current_env()) {
        case 'staging':
            return 'https://staging-app.voolt.com';
            break;
        case 'production':
            return 'https://app.voolt.com';
            break;
        default:
            return 'https://dev-app.voolt.com';
    }
}

function get_page_title(){
  $clean_path = get_clean_path();
    
  $json = file_get_contents('./inc/seo_data.json'); 
  $json_data = json_decode($json, true); 

  if(isset($json_data[$clean_path])){
    return $json_data[$clean_path]['title'];
  }

  return $json_data['404']['title'];
}


function get_page_description(){
    $clean_path = get_clean_path();
    
    $json = file_get_contents('./inc/seo_data.json'); 
    $json_data = json_decode($json, true); 

    if(isset($json_data[$clean_path])){
        return $json_data[$clean_path]['description'];
    }

  return '';
}

function is_user_logged_in(){
    switch (get_current_env()){
        case 'staging':
            return isset($_COOKIE["_Secure-3PAUTHV"]);
            break;
        case 'prod':
            return isset($_COOKIE["_Secure-1PAUTHV"]);
            break;
        case 'dev':
            return isset($_COOKIE["_Secure-2PAUTHV"]);
            break;
        default:
            return false;
    }
    
    return false;
}