function getRefQueryParam(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};
const setCookie = (
    cname,
    cvalue,
    exdays = 0,
    priority = 'High',
    sameSite = 'Lax',
  ) => {
    let expires = 'expires=' + getTimeInSeconds(exdays);
    let domain = '.voolt.com';
  
    if (browser && location.origin.includes('localhost')) {
      domain = 'localhost';
    }
  
    if (location.host.includes('ngrok')) {
      domain = location.host;
    }
  
    return (document.cookie = `${cname}=${cvalue};domain=${domain};path=/;priority=${priority};${expires};SameSite=${sameSite};secure;`);
};
const getCookie = cname => {
    let name = cname + '=';
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return false;
};
const getTimeInSeconds = exdays => {
    const d = new Date();
    let formula = exdays === 0 ? 5 * 60 * 1000 : exdays * 24 * 60 * 60 * 1000;
    d.setTime(d.getTime() + formula);
    return d.toUTCString();
};

var utmParamQueryString = '',
    utmParamQueryStringTrimmed = '',
    utm_source = '',
    utm_medium = '',
    utm_content = '',
    utm_campaign = '',
    utm_term = '';

(function() {

    if (
        !getCookie('vlt_referrer_url')
        ) {
            setCookie('vlt_referrer_url', document.location.href, 30);
        }

    utm_source = getRefQueryParam("utm_source");
    utm_medium = getRefQueryParam("utm_medium");
    utm_content = getRefQueryParam("utm_content");
    utm_campaign = getRefQueryParam("utm_campaign");
    utm_term = getRefQueryParam("utm_term");

    if (utm_source) {
        utmParamQueryString += '&utm_source=' + utm_source;
    }
    if (utm_medium) {
        utmParamQueryString += '&utm_medium=' + utm_medium;
    }
    if (utm_content) {
        utmParamQueryString += '&utm_content=' + utm_content;
    }
    if (utm_campaign) {
        utmParamQueryString += '&utm_campaign=' + utm_campaign;
    }
    if (utm_term) {
        utmParamQueryString += '&utm_term=' + utm_term;
    }

    if(utmParamQueryString.length > 0) {
        utmParamQueryString = utmParamQueryString.substring(1);
        utmParamQueryStringTrimmed = utmParamQueryString;
        utmParamQueryString = utmParamQueryString;
    }
    if (!utmParamQueryString) return;
    var navLinks = document.querySelectorAll('a');

    navLinks.forEach(function(item) {

      if (item.href.indexOf('/') === 0 || item.href.indexOf(location.host.replace('www.', '')) !== -1) {
        if (item.href.indexOf('?') === -1) {
            item.href += '?';
        } else {
          item.href += '&';
        }
        item.href += utmParamQueryString;
      }
    });
})();