<!DOCTYPE html>
<html lang="en">
<?php include_once('./global/head.php'); ?>

<body class="website-builder">
  <?php include_once('./global/navigation.php'); ?>

  <section class="mt-[85px] voolt-in-numbers bg-background relative overflow-hidden custom-bg">
    <div class="wrapper relative max-w-[1440px] m-auto lg:p-[80px] lg:pb-[150px] lg:pt-[107px] md:py-[80px] md:px-[40px] xsm:py-[40px] xsm:px-[32px] py-[32px] px-[16px] flex flex-col">
      <h1 class="max-lg:mx-auto max-lg:text-center max-md:tracking-[0] max-sm:text-[32px] font-inter-tight text-[80px] tracking-[-1.5px] not-italic font-extrabold leading-[120%] max-md:text-[48px] max-sm:max-w-[320px]">
        Build your website <br />
        in 60 seconds
      </h1>
      <p class="max-lg:text-center max-sm:text-[16px] max-sm:mt-[16px] font-inter-tight text-[22px] text-muted-foreground tracking-[-0.1px] not-italic font-semibold leading-[135%] mt-[13px] max-lg:text-[20px] max-lg:mt-[25px] max-lg:tracking-[0.1px] max-md:text-[22px] ">Showcase your services to new clients searching for them.</p>
      <a href="<?php echo get_app_url(); ?>/flow/01/1/" class="max-lg:mx-auto max-sm:w-full mt-[36px] rounded-[6px] border-[4px] border-[solid] border-[rgba(252,200,44,0.20)] w-min max-sm:mt-[29px] flex">
        <div class="font-inter-tight hover:bg-primary/90 transition-all duration-300 rounded-[6px] tracking-[0.1px] inline-flex w-min whitespace-nowrap py-[16px] px-[29px] justify-center items-center gap-[8px] bg-primary text-[16px] not-italic font-semibold leading-[24px] max-sm:w-[100%]">
          <span>Get Started for Free</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="flex">
            <path d="M6 12L10 8L6 4" stroke="#030916" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </a>

      <div class="max-lg:mx-auto flex gap-[12px] mt-[19px] max-lg:mt-[22px]">
        <div class="inline-flex gap-[4px]">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_436_4652)">
              <path d="M5.00065 8.00065L7.00065 10.0007L11.0007 6.00065M14.6673 8.00065C14.6673 11.6826 11.6826 14.6673 8.00065 14.6673C4.31875 14.6673 1.33398 11.6826 1.33398 8.00065C1.33398 4.31875 4.31875 1.33398 8.00065 1.33398C11.6826 1.33398 14.6673 4.31875 14.6673 8.00065Z" stroke="#0473C2" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <clipPath id="clip0_436_4652">
                <rect width="16" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <p class="font-inter-tight text-muted-foreground text-[12px] not-italic font-medium leading-[150%] tracking-[0.1px]">No credit card-required.</p>
        </div>
        <div class="inline-flex gap-[4px]">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_436_4652)">
              <path d="M5.00065 8.00065L7.00065 10.0007L11.0007 6.00065M14.6673 8.00065C14.6673 11.6826 11.6826 14.6673 8.00065 14.6673C4.31875 14.6673 1.33398 11.6826 1.33398 8.00065C1.33398 4.31875 4.31875 1.33398 8.00065 1.33398C11.6826 1.33398 14.6673 4.31875 14.6673 8.00065Z" stroke="#0473C2" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <clipPath id="clip0_436_4652">
                <rect width="16" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <p class="font-inter-tight text-muted-foreground text-[12px] not-italic font-medium leading-[150%] tracking-[0.1px]">14-day free trial.</p>
        </div>
      </div>

      <div class="max-lg:mx-auto max-sm:mt-[32px] inline-flex items-center gap-[8px] mt-[40px]">
        <div class="flex items-center pl-[12px]">
          <img class="ml-[-12px]" src="/imgs/hero-avatar1.png" alt="Customers picture" />
          <img class="ml-[-12px]" src="/imgs/hero-avatar2.png" alt="Customers picture" />
          <img class="ml-[-12px]" src="/imgs/hero-avatar3.png" alt="Customers picture" />
          <img class="ml-[-12px]" src="/imgs/hero-avatar4.png" alt="Customers picture" />
        </div>
        <div class="flex flex-col justify-center items-start gap-[8px]">
          <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path
                d="M7.52242 2.30302C7.67608 1.99173 7.7529 1.83609 7.8572 1.78636C7.94795 1.74309 8.05338 1.74309 8.14412 1.78636C8.24842 1.83609 8.32525 1.99173 8.47891 2.30302L9.93669 5.25634C9.98205 5.34824 10.0047 5.39419 10.0379 5.42986C10.0672 5.46145 10.1024 5.48705 10.1415 5.50523C10.1857 5.52576 10.2364 5.53317 10.3378 5.548L13.5986 6.02462C13.942 6.07481 14.1137 6.0999 14.1932 6.18377C14.2623 6.25674 14.2948 6.35701 14.2817 6.45666C14.2665 6.5712 14.1422 6.69227 13.8936 6.9344L11.535 9.23176C11.4614 9.30338 11.4247 9.33918 11.4009 9.38179C11.3799 9.41951 11.3665 9.46096 11.3613 9.50382C11.3554 9.55223 11.3641 9.60281 11.3814 9.70397L11.938 12.9489C11.9967 13.2911 12.026 13.4623 11.9708 13.5638C11.9229 13.6522 11.8376 13.7141 11.7387 13.7325C11.6251 13.7535 11.4714 13.6727 11.1641 13.5111L8.2489 11.978C8.15807 11.9303 8.11266 11.9064 8.06481 11.897C8.02245 11.8887 7.97888 11.8887 7.93651 11.897C7.88867 11.9064 7.84325 11.9303 7.75242 11.978L4.83727 13.5111C4.52993 13.6727 4.37626 13.7535 4.26263 13.7325C4.16377 13.7141 4.07847 13.6522 4.03048 13.5638C3.97532 13.4623 4.00467 13.2911 4.06337 12.9489L4.61991 9.70397C4.63726 9.60281 4.64593 9.55223 4.64006 9.50382C4.63487 9.46096 4.62139 9.41951 4.60039 9.38179C4.57667 9.33918 4.5399 9.30337 4.46637 9.23176L2.10769 6.9344C1.85909 6.69227 1.73479 6.5712 1.71967 6.45666C1.70651 6.35701 1.73902 6.25674 1.80815 6.18377C1.88761 6.0999 2.0593 6.07481 2.40268 6.02462L5.66353 5.548C5.76493 5.53317 5.81564 5.52576 5.8598 5.50523C5.89889 5.48705 5.93409 5.46145 5.96344 5.42986C5.99659 5.39419 6.01927 5.34824 6.06463 5.25634L7.52242 2.30302Z"
                fill="#FCC82C"
                stroke="#FCC82C"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path
                d="M7.52242 2.30302C7.67608 1.99173 7.7529 1.83609 7.8572 1.78636C7.94795 1.74309 8.05338 1.74309 8.14412 1.78636C8.24842 1.83609 8.32525 1.99173 8.47891 2.30302L9.93669 5.25634C9.98205 5.34824 10.0047 5.39419 10.0379 5.42986C10.0672 5.46145 10.1024 5.48705 10.1415 5.50523C10.1857 5.52576 10.2364 5.53317 10.3378 5.548L13.5986 6.02462C13.942 6.07481 14.1137 6.0999 14.1932 6.18377C14.2623 6.25674 14.2948 6.35701 14.2817 6.45666C14.2665 6.5712 14.1422 6.69227 13.8936 6.9344L11.535 9.23176C11.4614 9.30338 11.4247 9.33918 11.4009 9.38179C11.3799 9.41951 11.3665 9.46096 11.3613 9.50382C11.3554 9.55223 11.3641 9.60281 11.3814 9.70397L11.938 12.9489C11.9967 13.2911 12.026 13.4623 11.9708 13.5638C11.9229 13.6522 11.8376 13.7141 11.7387 13.7325C11.6251 13.7535 11.4714 13.6727 11.1641 13.5111L8.2489 11.978C8.15807 11.9303 8.11266 11.9064 8.06481 11.897C8.02245 11.8887 7.97888 11.8887 7.93651 11.897C7.88867 11.9064 7.84325 11.9303 7.75242 11.978L4.83727 13.5111C4.52993 13.6727 4.37626 13.7535 4.26263 13.7325C4.16377 13.7141 4.07847 13.6522 4.03048 13.5638C3.97532 13.4623 4.00467 13.2911 4.06337 12.9489L4.61991 9.70397C4.63726 9.60281 4.64593 9.55223 4.64006 9.50382C4.63487 9.46096 4.62139 9.41951 4.60039 9.38179C4.57667 9.33918 4.5399 9.30337 4.46637 9.23176L2.10769 6.9344C1.85909 6.69227 1.73479 6.5712 1.71967 6.45666C1.70651 6.35701 1.73902 6.25674 1.80815 6.18377C1.88761 6.0999 2.0593 6.07481 2.40268 6.02462L5.66353 5.548C5.76493 5.53317 5.81564 5.52576 5.8598 5.50523C5.89889 5.48705 5.93409 5.46145 5.96344 5.42986C5.99659 5.39419 6.01927 5.34824 6.06463 5.25634L7.52242 2.30302Z"
                fill="#FCC82C"
                stroke="#FCC82C"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path
                d="M7.52242 2.30302C7.67608 1.99173 7.7529 1.83609 7.8572 1.78636C7.94795 1.74309 8.05338 1.74309 8.14412 1.78636C8.24842 1.83609 8.32525 1.99173 8.47891 2.30302L9.93669 5.25634C9.98205 5.34824 10.0047 5.39419 10.0379 5.42986C10.0672 5.46145 10.1024 5.48705 10.1415 5.50523C10.1857 5.52576 10.2364 5.53317 10.3378 5.548L13.5986 6.02462C13.942 6.07481 14.1137 6.0999 14.1932 6.18377C14.2623 6.25674 14.2948 6.35701 14.2817 6.45666C14.2665 6.5712 14.1422 6.69227 13.8936 6.9344L11.535 9.23176C11.4614 9.30338 11.4247 9.33918 11.4009 9.38179C11.3799 9.41951 11.3665 9.46096 11.3613 9.50382C11.3554 9.55223 11.3641 9.60281 11.3814 9.70397L11.938 12.9489C11.9967 13.2911 12.026 13.4623 11.9708 13.5638C11.9229 13.6522 11.8376 13.7141 11.7387 13.7325C11.6251 13.7535 11.4714 13.6727 11.1641 13.5111L8.2489 11.978C8.15807 11.9303 8.11266 11.9064 8.06481 11.897C8.02245 11.8887 7.97888 11.8887 7.93651 11.897C7.88867 11.9064 7.84325 11.9303 7.75242 11.978L4.83727 13.5111C4.52993 13.6727 4.37626 13.7535 4.26263 13.7325C4.16377 13.7141 4.07847 13.6522 4.03048 13.5638C3.97532 13.4623 4.00467 13.2911 4.06337 12.9489L4.61991 9.70397C4.63726 9.60281 4.64593 9.55223 4.64006 9.50382C4.63487 9.46096 4.62139 9.41951 4.60039 9.38179C4.57667 9.33918 4.5399 9.30337 4.46637 9.23176L2.10769 6.9344C1.85909 6.69227 1.73479 6.5712 1.71967 6.45666C1.70651 6.35701 1.73902 6.25674 1.80815 6.18377C1.88761 6.0999 2.0593 6.07481 2.40268 6.02462L5.66353 5.548C5.76493 5.53317 5.81564 5.52576 5.8598 5.50523C5.89889 5.48705 5.93409 5.46145 5.96344 5.42986C5.99659 5.39419 6.01927 5.34824 6.06463 5.25634L7.52242 2.30302Z"
                fill="#FCC82C"
                stroke="#FCC82C"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path
                d="M7.52242 2.30302C7.67608 1.99173 7.7529 1.83609 7.8572 1.78636C7.94795 1.74309 8.05338 1.74309 8.14412 1.78636C8.24842 1.83609 8.32525 1.99173 8.47891 2.30302L9.93669 5.25634C9.98205 5.34824 10.0047 5.39419 10.0379 5.42986C10.0672 5.46145 10.1024 5.48705 10.1415 5.50523C10.1857 5.52576 10.2364 5.53317 10.3378 5.548L13.5986 6.02462C13.942 6.07481 14.1137 6.0999 14.1932 6.18377C14.2623 6.25674 14.2948 6.35701 14.2817 6.45666C14.2665 6.5712 14.1422 6.69227 13.8936 6.9344L11.535 9.23176C11.4614 9.30338 11.4247 9.33918 11.4009 9.38179C11.3799 9.41951 11.3665 9.46096 11.3613 9.50382C11.3554 9.55223 11.3641 9.60281 11.3814 9.70397L11.938 12.9489C11.9967 13.2911 12.026 13.4623 11.9708 13.5638C11.9229 13.6522 11.8376 13.7141 11.7387 13.7325C11.6251 13.7535 11.4714 13.6727 11.1641 13.5111L8.2489 11.978C8.15807 11.9303 8.11266 11.9064 8.06481 11.897C8.02245 11.8887 7.97888 11.8887 7.93651 11.897C7.88867 11.9064 7.84325 11.9303 7.75242 11.978L4.83727 13.5111C4.52993 13.6727 4.37626 13.7535 4.26263 13.7325C4.16377 13.7141 4.07847 13.6522 4.03048 13.5638C3.97532 13.4623 4.00467 13.2911 4.06337 12.9489L4.61991 9.70397C4.63726 9.60281 4.64593 9.55223 4.64006 9.50382C4.63487 9.46096 4.62139 9.41951 4.60039 9.38179C4.57667 9.33918 4.5399 9.30337 4.46637 9.23176L2.10769 6.9344C1.85909 6.69227 1.73479 6.5712 1.71967 6.45666C1.70651 6.35701 1.73902 6.25674 1.80815 6.18377C1.88761 6.0999 2.0593 6.07481 2.40268 6.02462L5.66353 5.548C5.76493 5.53317 5.81564 5.52576 5.8598 5.50523C5.89889 5.48705 5.93409 5.46145 5.96344 5.42986C5.99659 5.39419 6.01927 5.34824 6.06463 5.25634L7.52242 2.30302Z"
                fill="#FCC82C"
                stroke="#FCC82C"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path
                d="M7.52242 2.30302C7.67608 1.99173 7.7529 1.83609 7.8572 1.78636C7.94795 1.74309 8.05338 1.74309 8.14412 1.78636C8.24842 1.83609 8.32525 1.99173 8.47891 2.30302L9.93669 5.25634C9.98205 5.34824 10.0047 5.39419 10.0379 5.42986C10.0672 5.46145 10.1024 5.48705 10.1415 5.50523C10.1857 5.52576 10.2364 5.53317 10.3378 5.548L13.5986 6.02462C13.942 6.07481 14.1137 6.0999 14.1932 6.18377C14.2623 6.25674 14.2948 6.35701 14.2817 6.45666C14.2665 6.5712 14.1422 6.69227 13.8936 6.9344L11.535 9.23176C11.4614 9.30338 11.4247 9.33918 11.4009 9.38179C11.3799 9.41951 11.3665 9.46096 11.3613 9.50382C11.3554 9.55223 11.3641 9.60281 11.3814 9.70397L11.938 12.9489C11.9967 13.2911 12.026 13.4623 11.9708 13.5638C11.9229 13.6522 11.8376 13.7141 11.7387 13.7325C11.6251 13.7535 11.4714 13.6727 11.1641 13.5111L8.2489 11.978C8.15807 11.9303 8.11266 11.9064 8.06481 11.897C8.02245 11.8887 7.97888 11.8887 7.93651 11.897C7.88867 11.9064 7.84325 11.9303 7.75242 11.978L4.83727 13.5111C4.52993 13.6727 4.37626 13.7535 4.26263 13.7325C4.16377 13.7141 4.07847 13.6522 4.03048 13.5638C3.97532 13.4623 4.00467 13.2911 4.06337 12.9489L4.61991 9.70397C4.63726 9.60281 4.64593 9.55223 4.64006 9.50382C4.63487 9.46096 4.62139 9.41951 4.60039 9.38179C4.57667 9.33918 4.5399 9.30337 4.46637 9.23176L2.10769 6.9344C1.85909 6.69227 1.73479 6.5712 1.71967 6.45666C1.70651 6.35701 1.73902 6.25674 1.80815 6.18377C1.88761 6.0999 2.0593 6.07481 2.40268 6.02462L5.66353 5.548C5.76493 5.53317 5.81564 5.52576 5.8598 5.50523C5.89889 5.48705 5.93409 5.46145 5.96344 5.42986C5.99659 5.39419 6.01927 5.34824 6.06463 5.25634L7.52242 2.30302Z"
                fill="#FCC82C"
                stroke="#FCC82C"
                stroke-width="1.2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
          <p class="font-inter-tight text-muted-foreground tracking-[0.1px] text-[12px] not-italic font-medium leading-[150%]">Trusted by 101k customers.</p>
        </div>
      </div>

      <div class="max-sm:mt-[32px] flex justify-between absolute right-[80px] w-[530px] top-[0] bottom-[0] max-2xl:w-[445px] max-xl:w-[200px] max-xl:right-[40px] max-lg:relative max-lg:right-auto max-lg:top-auto max-lg:mt-[40px] max-lg:gap-0 max-lg:w-[100%]">
        <div class="absolute left-[0] right-[-130px] h-[88px] lg:bg-[linear-gradient(180deg,_rgba(255,255,255,1)_0%,_rgba(0,0,0,0)_100%)] max-lg:right-auto max-lg:bottom-0 max-lg:top-0 max-lg:w-[88px] max-lg:h-[100%] max-lg:left-[-40px] max-lg:bg-[linear-gradient(90deg,_rgba(255,255,255,1)_0%,_rgba(0,0,0,0)_100%)] z-[3]"></div>
        <div class="absolute left-[0] right-[-130px] bottom-[0] h-[88px] lg:bg-[linear-gradient(180deg,_rgba(0,0,0,0)_0%,_rgba(255,255,255,1)_100%)] max-lg:left-auto max-lg:bottom-0 max-lg:top-0 max-lg:w-[88px] max-lg:h-[100%] max-lg:right-[-40px] max-lg:bg-[linear-gradient(90deg,_rgba(0,0,0,0)_0%,_rgba(255,255,255,1)_100%)] z-[3]"></div>
        <div class="block">
          <div id="js_slider_move1" class="flex flex-col gap-[32px] max-lg:mt-auto max-lg:flex-row max-lg:gap-[26px] max-sm:gap-[16px]">
            <img src="/imgs/hero-website-preview1.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview2.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview3.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview4.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview5.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview6.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview7.webp" class="max-sm:max-w-[130px]" alt="Smartphone screens displaying a landscaping service website." />
          </div>
        </div>
        <div class="block max-xl:hidden">
          <div id="js_slider_move2" class="flex flex-col gap-[32px] max-lg:mt-auto">
            <img src="/imgs/hero-website-preview8.webp" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview9.webp" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview10.webp" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/review.webp" alt="Smartphone screens displaying a landscaping service website." />
          </div>
        </div>
        <div class="block max-xl:hidden mr-[-124px]">
          <div id="js_slider_move3" class="flex flex-col gap-[32px] max-lg:mt-auto">
            <img src="/imgs/hero-website-preview11.webp" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview12.webp" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview1.webp" alt="Smartphone screens displaying a landscaping service website." />
            <img src="/imgs/hero-website-preview2.webp" alt="Smartphone screens displaying a landscaping service website." />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="voolt-in-numbers bg-background relative overflow-hidden">
    <div class="wrapper relative max-w-[1440px] m-auto lg:p-[80px] lg:pb-[79px] lg:pt-[80px] md:py-[80px] md:px-[40px] xsm:py-[40px] xsm:px-[32px] py-[32px] px-[16px] flex flex-col">
      <h2 class="max-sm:text-[24px] font-inter-tight max-md:text-[32px] mb-[40px] max-xsm:mb-[32px] m-auto max-w-[800px] text-[#09090B] tracking-[0.48px] text-center text-[48px] not-italic font-bold leading-[120%]">We’re not lying, in just 60 seconds, you can have a pro website</h2>

      <div class="relative">
        <div class="max-sm:min-h-[250px] max-md:min-h-[366px] playvideo cursor-pointer relative rounded-[24px] border-[1px] border-[solid] border-[#E4E4E7] bg-[#F8F8F8] flex min-h-[600px] p-[32px] flex-col justify-center items-center gap-[32px]">
          <img src="/imgs/vide-placeholder.svg" alt="" />

          <div class="opacity-80 bg-[#1F2328] absolute left-0 top-0 bottom-0 right-0 rounded-[24px]"></div>

          <p class="max-sm:text-[18px] absolute left-[30px] bottom-[30px] text-[#FFF] font-inter-tight text-[24px] not-italic font-bold leading-[130%]">Watch Video</p>

          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none" class="absolute max-sm:w-[24px]">
            <path
              d="M20.8359 20.7958C20.8359 16.7493 20.8359 14.726 21.6796 13.6107C22.4147 12.6391 23.5381 12.0379 24.7543 11.9653C26.1503 11.8819 27.8337 13.0042 31.2006 15.2488L75.0154 44.4587C77.7975 46.3134 79.1885 47.2407 79.6732 48.4096C80.097 49.4315 80.097 50.5799 79.6732 51.6018C79.1885 52.7707 77.7975 53.698 75.0154 55.5527L31.2006 84.7626C27.8337 87.0072 26.1503 88.1295 24.7543 88.0461C23.5381 87.9735 22.4147 87.3723 21.6796 86.4007C20.8359 85.2854 20.8359 83.2621 20.8359 79.2156V20.7958Z"
              fill="white"
              stroke="white"
              stroke-width="16.7083"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </div>
        <video width="100%" height="400" id="60secvideo" class="max-sm:h-[250px] max-md:h-[366px] absolute opacity-0 z-[-10] top-0 h-[600px]" controls>
          <source src="videos/buildingwebsite.mp4" type="video/mp4" />
          Your browser does not support HTML video.
        </video>
      </div>
    </div>
  </section>

  <section class="single-testimonial">
    <div class="wrapper max-w-[1440px] m-auto lg:px-[80px] md:px-[40px] xsm:px-[32px] px-[16px] flex flex-col md:gap-[40px] gap-[24px]">
      <h5 class="tracking-[0.18px] m-auto text-center font-inter-tight text-foreground text-[18px] font-semibold leading-[28px]">"In 60 seconds, my website was complete, allowing me to focus on my offline work. Now, my services are easily contracted online."</h5>
      <div class="flex justify-center items-center gap-[16px]">
        <img loading="lazy" src="/imgs/eva.png" alt="Avatar" />
        <div>
          <p class="font-inter-tight text-foreground text-[18px] font-medium leading-[140%]">Roy C.</p>
          <p class="tracking-[0.16px] font-inter-tight text-muted-foreground text-[18px] font-medium leading-[140%]">Cooper Lawn LLC</p>
        </div>
      </div>
    </div>
  </section>

  <section class="relative">
    <div class="wrapper max-w-[1440px] m-auto lg:py-[80px] lg:px-[80px] md:py-[80px] md:px-[40px] xsm:py-[40px] xsm:px-[32px] py-[32px] px-[16px] flex flex-col md:gap-[40px] gap-[24px]">
      <div class="absolute top-2/4 -translate-y-1/2 left-0 right-0 m-auto w-full h-[400px] max-w-[400px] rounded-[400px] bg-[rgba(0,_149,_255,_0.10)] filter blur-[100px]"></div>
      <div class="max-md:gap-[24px] relative z-1 flex flex-wrap gap-[40px]">
        <div class="max-md:w-[100%] p-[1px] overflow-hidden w-[calc(33.33%-26.66px)] min-h-[212px] rounded-[24px] bg-[linear-gradient(to_bottom,_#0473C2_0%,#ffffff_100%)] bg-[#FFF] max-lg:w-[calc(50%-20px)]">
          <div class="w-full h-full bg-[#fff] rounded-[24px] flex flex-col p-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path
                d="M21.3326 10.666V6.66602L25.3326 2.66602L26.666 5.33268L29.3326 6.66602L25.3326 10.666H21.3326ZM21.3326 10.666L15.9993 15.9993M29.3327 15.9994C29.3327 23.3631 23.3631 29.3327 15.9994 29.3327C8.63555 29.3327 2.66602 23.3631 2.66602 15.9994C2.66602 8.63555 8.63555 2.66602 15.9994 2.66602M22.666 15.9994C22.666 19.6812 19.6812 22.666 15.9994 22.666C12.3175 22.666 9.33268 19.6812 9.33268 15.9994C9.33268 12.3175 12.3175 9.33268 15.9994 9.33268"
                stroke="url(#paint0_linear_414_7338)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_414_7338" x1="14.9995" y1="-26.8118" x2="16.094" y2="29.3308" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
              </defs>
            </svg>
            <h3 class="mt-[25px] mb-[11px] font-inter-tight text-[#09090B] tracking-[-0.11px] text-[22px] not-italic font-semibold leading-[135%]">Drive traffic ready to hire you</h3>
            <p class="font-inter-tight text-[#71717A] tracking-[0.18px] text-[18px] not-italic font-semibold leading-[140%]">Upgrade to Voolt Premium and generate leads from a local, qualified audience.</p>
          </div>
        </div>
        <div class="max-md:w-[100%] p-[1px] overflow-hidden w-[calc(33.33%-26.66px)] min-h-[212px] rounded-[24px] bg-[linear-gradient(to_bottom,_#0473C2_0%,#ffffff_100%)] bg-[#FFF] max-lg:w-[calc(50%-20px)]">
          <div class="w-full h-full bg-[#fff] rounded-[24px] flex flex-col p-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path d="M16.0007 17.3327C18.2098 17.3327 20.0007 15.5418 20.0007 13.3327C20.0007 11.1235 18.2098 9.33268 16.0007 9.33268C13.7915 9.33268 12.0007 11.1235 12.0007 13.3327C12.0007 15.5418 13.7915 17.3327 16.0007 17.3327Z" stroke="url(#paint0_linear_414_7340)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M16.0007 29.3327C21.334 23.9994 26.6673 19.2237 26.6673 13.3327C26.6673 7.44165 21.8917 2.66602 16.0007 2.66602C10.1096 2.66602 5.33398 7.44165 5.33398 13.3327C5.33398 19.2237 10.6673 23.9994 16.0007 29.3327Z" stroke="url(#paint1_linear_414_7340)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_414_7340" x1="15.2008" y1="-26.8118" x2="16.5686" y2="29.3188" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
                <linearGradient id="paint1_linear_414_7340" x1="15.2008" y1="-26.8118" x2="16.5686" y2="29.3188" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
              </defs>
            </svg>
            <h3 class="mt-[25px] mb-[11px] font-inter-tight text-[#09090B] tracking-[-0.11px] text-[22px] not-italic font-semibold leading-[135%]">Made for local businesses</h3>
            <p class="font-inter-tight text-[#71717A] tracking-[0.18px] text-[18px] not-italic font-semibold leading-[140%]">Developed by experts in growing businesses like yours.</p>
          </div>
        </div>
        <div class="max-md:w-[100%] p-[1px] overflow-hidden w-[calc(33.33%-26.66px)] min-h-[212px] rounded-[24px] bg-[linear-gradient(to_bottom,_#0473C2_0%,#ffffff_100%)] bg-[#FFF] max-lg:w-[calc(50%-20px)]">
          <div class="w-full h-full bg-[#fff] rounded-[24px] flex flex-col p-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path
                d="M16.0007 19.9997L12.0007 15.9997M16.0007 19.9997C17.8631 19.2913 19.6498 18.398 21.334 17.333M16.0007 19.9997V26.6663C16.0007 26.6663 20.0407 25.933 21.334 23.9997C22.774 21.8397 21.334 17.333 21.334 17.333M12.0007 15.9997C12.7102 14.1589 13.6036 12.3944 14.6673 10.733C16.2209 8.249 18.3842 6.20375 20.9513 4.7918C23.5185 3.37986 26.4042 2.64817 29.334 2.66635C29.334 6.29301 28.294 12.6663 21.334 17.333M12.0007 15.9997H5.33398C5.33398 15.9997 6.06732 11.9597 8.00065 10.6663C10.1607 9.22635 14.6673 10.6663 14.6673 10.6663M6.00065 21.9997C4.00065 23.6797 3.33398 28.6663 3.33398 28.6663C3.33398 28.6663 8.32065 27.9997 10.0007 25.9997C10.9473 24.8797 10.934 23.1597 9.88065 22.1197C9.36239 21.625 8.67971 21.3392 7.96362 21.3171C7.24753 21.2949 6.54849 21.538 6.00065 21.9997Z"
                stroke="url(#paint0_linear_414_7342)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_414_7342" x1="15.3591" y1="-26.0752" x2="16.4263" y2="28.6645" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
              </defs>
            </svg>
            <h3 class="mt-[25px] mb-[11px] font-inter-tight text-[#09090B] tracking-[-0.11px] text-[22px] not-italic font-semibold leading-[135%]">Optimized for high conversion</h3>
            <p class="font-inter-tight text-[#71717A] tracking-[0.18px] text-[18px] not-italic font-semibold leading-[140%]">With Voolt Premium, maximize clicks and turn visitors into loyal customers.</p>
          </div>
        </div>
        <div class="max-md:w-[100%] p-[1px] overflow-hidden w-[calc(33.33%-26.66px)] min-h-[212px] rounded-[24px] bg-[linear-gradient(to_bottom,_#0473C2_0%,#ffffff_100%)] bg-[#FFF] max-lg:w-[calc(50%-20px)]">
          <div class="w-full h-full bg-[#fff] rounded-[24px] flex flex-col p-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path
                d="M11.9994 15.9994L14.666 18.666L20.666 12.666M9.77771 5.09094C10.8495 5.00541 11.867 4.58396 12.6853 3.88657C14.595 2.25916 17.4037 2.25916 19.3134 3.88657C20.1317 4.58396 21.1492 5.00541 22.221 5.09094C24.7221 5.29053 26.7082 7.27661 26.9078 9.77771C26.9933 10.8495 27.4147 11.867 28.1121 12.6853C29.7395 14.595 29.7395 17.4037 28.1121 19.3134C27.4147 20.1317 26.9933 21.1492 26.9078 22.221C26.7082 24.7221 24.7221 26.7082 22.221 26.9078C21.1492 26.9933 20.1317 27.4147 19.3134 28.1121C17.4037 29.7395 14.595 29.7395 12.6853 28.1121C11.867 27.4147 10.8495 26.9933 9.77771 26.9078C7.27661 26.7082 5.29053 24.7221 5.09094 22.221C5.00541 21.1492 4.58396 20.1317 3.88657 19.3134C2.25916 17.4037 2.25916 14.595 3.88657 12.6853C4.58396 11.867 5.00541 10.8495 5.09094 9.77771C5.29053 7.27661 7.27661 5.29053 9.77771 5.09094Z"
                stroke="url(#paint0_linear_414_7348)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_414_7348" x1="14.9995" y1="-26.8118" x2="16.094" y2="29.3308" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
              </defs>
            </svg>
            <h3 class="mt-[25px] mb-[11px] font-inter-tight text-[#09090B] tracking-[-0.11px] text-[22px] not-italic font-semibold leading-[135%]">Zero tech skills required</h3>
            <p class="font-inter-tight text-[#71717A] tracking-[0.18px] text-[18px] not-italic font-semibold leading-[140%]">Be a wizard in your job and your job only. We handle the rest for you.</p>
          </div>
        </div>
        <div class="max-md:w-[100%] p-[1px] overflow-hidden w-[calc(33.33%-26.66px)] min-h-[212px] rounded-[24px] bg-[linear-gradient(to_bottom,_#0473C2_0%,#ffffff_100%)] bg-[#FFF] max-lg:w-[calc(50%-20px)]">
          <div class="w-full h-full bg-[#fff] rounded-[24px] flex flex-col p-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path
                d="M5.99935 29.3327V22.666M5.99935 9.33268V2.66602M2.66602 5.99935H9.33268M2.66602 25.9994H9.33268M17.3327 3.99935L15.0204 10.0112C14.6444 10.9888 14.4564 11.4776 14.1641 11.8888C13.9049 12.2532 13.5865 12.5716 13.2221 12.8307C12.811 13.1231 12.3221 13.3111 11.3445 13.6871L5.33268 15.9994L11.3445 18.3116C12.3221 18.6876 12.811 18.8756 13.2221 19.168C13.5865 19.4271 13.9049 19.7455 14.1641 20.1099C14.4564 20.5211 14.6444 21.0099 15.0204 21.9875L17.3327 27.9994L19.6449 21.9875C20.0209 21.0099 20.2089 20.5211 20.5013 20.1099C20.7604 19.7455 21.0788 19.4271 21.4432 19.168C21.8544 18.8756 22.3432 18.6876 23.3209 18.3116L29.3327 15.9994L23.3209 13.6871C22.3432 13.3111 21.8544 13.1231 21.4432 12.8307C21.0788 12.5716 20.7604 12.2532 20.5013 11.8888C20.2089 11.4776 20.0209 10.9888 19.6449 10.0112L17.3327 3.99935Z"
                stroke="url(#paint0_linear_414_7346)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_414_7346" x1="14.9995" y1="-26.8118" x2="16.094" y2="29.3308" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
              </defs>
            </svg>
            <h3 class="mt-[25px] mb-[11px] font-inter-tight text-[#09090B] tracking-[-0.11px] text-[22px] not-italic font-semibold leading-[135%]">100% automated with AI</h3>
            <p class="font-inter-tight text-[#71717A] tracking-[0.18px] text-[18px] not-italic font-semibold leading-[140%]">Let AI handle the tedious work quickly, following proven strategies.</p>
          </div>
        </div>
        <div class="max-md:w-[100%] p-[1px] overflow-hidden w-[calc(33.33%-26.66px)] min-h-[212px] rounded-[24px] bg-[linear-gradient(to_bottom,_#0473C2_0%,#ffffff_100%)] bg-[#FFF] max-lg:w-[calc(50%-20px)]">
          <div class="w-full h-full bg-[#fff] rounded-[24px] flex flex-col p-[30px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path
                d="M11.9994 23.3333H4.66602M8.66602 16H2.66602M11.9994 8.66667H5.33268M22.666 4L13.8708 16.3133C13.4815 16.8583 13.2868 17.1308 13.2953 17.358C13.3026 17.5558 13.3975 17.7402 13.5541 17.8611C13.7341 18 14.069 18 14.7388 18H21.3327L19.9994 28L28.7946 15.6867C29.1839 15.1417 29.3785 14.8692 29.3701 14.642C29.3628 14.4442 29.2679 14.2598 29.1112 14.1389C28.9312 14 28.5964 14 27.9266 14H21.3327L22.666 4Z"
                stroke="url(#paint0_linear_414_7344)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_414_7344" x1="15.0169" y1="-22.53" x2="15.9023" y2="28.002" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white" />
                  <stop offset="1" stop-color="#0095FF" />
                </linearGradient>
              </defs>
            </svg>
            <h3 class="mt-[25px] mb-[11px] font-inter-tight text-[#09090B] tracking-[-0.11px] text-[22px] not-italic font-semibold leading-[135%]">Fast page loading times</h3>
            <p class="font-inter-tight text-[#71717A] tracking-[0.18px] text-[18px] not-italic font-semibold leading-[140%]">Speed matters. Keep your clients engaged and satisfied.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="wrapper max-w-[1440px] m-auto lg:py-[80px] lg:px-[80px] md:py-[80px] md:px-[40px] xsm:py-[40px] xsm:px-[32px] py-[32px] px-[16px] flex flex-col md:gap-[40px] gap-[24px]">
      <div class="flex justify-between items-center max-lg:flex-col xsm:gap-[40px] gap-[32px]">
        <div class="max-lg:max-w-[100%] max-w-[600px] flex gap-[24px] flex-col max-xl:max-w-[calc(100%-450px)]">
          <h2 class="max-sm:text-[24px] max-md:text-[32px] font-inter-tight text-[#09090B] text-[48px] not-italic tracking-[0.48px] font-bold leading-[120%]">With Voolt Premium, keep your website live after the 14-day trial</h2>
          <p class="font-inter-tight max-sm:text-[16px] text-[#71717A] text-[22px] tracking-[-0.11px] not-italic font-semibold leading-[135%]">Here’s what you get:</p>
          <ul class="flex flex-col gap-[12.5px]">
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Uninterrupted online presence.</p>
            </li>
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Drive traffic to your website.</p>
            </li>
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Rank higher on Google with SEO optimization.</p>
            </li>
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Unlock easy custom domain setup.</p>
            </li>
          </ul>
          <a href="/voolt-premium" class="inline-flex font-inter-tight items-center gap-[4px] hover:opacity-90 hover:gap-[8px] transition-all duration-300 text-[#0473C2] text-[18px] not-italic font-semibold leading-[140%] max-xsm:text-[16px] max-xsm:leading-[150%]">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M9 18.8936L15 12.8936L9 6.89355" stroke="#0473C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </a>
        </div>
        <div class="max-lg:w-full lg:pl-[32px] lg:pt-[32px] pl-[21px] pt-[21px] rounded-[12px] border-[1px] border-[solid] border-[#E4E4E7] bg-[#F4F4F5]">
          <img class="max-lg:max-w-[100%] max-xl:max-w-[410px] max-lg:w-full" loading="lazy" src="/imgs/v-premium.webp" alt="Smartphone screen showing a handyman service ad alongside a web search result for the service." />
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="wrapper max-w-[1440px] m-auto lg:py-[80px] lg:px-[80px] md:py-[80px] md:px-[40px] xsm:py-[40px] xsm:px-[32px] py-[32px] px-[16px] flex flex-col md:gap-[40px] gap-[24px]">
      <div class="flex justify-between items-center xsm:gap-[40px] gap-[32px] max-lg:flex-col">
        <div class="max-lg:order-1 max-lg:max-w-[100%] max-w-[620px] flex gap-[24px] flex-col order-2 max-xl:max-w-[calc(100%-450px)]">
          <h2 class="max-sm:text-[24px] max-md:text-[32px] font-inter-tight text-[#09090B] text-[48px] not-italic tracking-[0.48px] font-bold leading-[120%]">Device-friendly & reliable</h2>
          <p class="max-sm:text-[16px] font-inter-tight text-[#71717A] text-[22px] tracking-[-0.11px] not-italic font-semibold leading-[135%]">Your website won’t let you down, delivering a seamless experience on any device. Built to perform, it ensures that your clients have a flawless browsing experience every time.</p>
          <ul class="flex flex-col gap-[12.5px]">
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Consistent performance across all devices.</p>
            </li>
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Smooth navigation on mobile, tablet, and desktop.</p>
            </li>
            <li class="flex gap-[12px] items-start">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="min-w-[24px] mt-[-2px]">
                <path d="M7.5 12.8936L10.5 15.8936L16.5 9.89355M22 12.8936C22 18.4164 17.5228 22.8936 12 22.8936C6.47715 22.8936 2 18.4164 2 12.8936C2 7.37071 6.47715 2.89355 12 2.89355C17.5228 2.89355 22 7.37071 22 12.8936Z" stroke="url(#paint0_linear_359_3145)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <defs>
                  <linearGradient id="paint0_linear_359_3145" x1="11.2501" y1="-19.2148" x2="12.071" y2="22.8922" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#0095FF"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <p class="text-[#71717A] font-inter-tight text-[18px] not-italic font-semibold leading-[140%] max-md:text-[16px] max-md:leading-[150%] max-xsm:text-[14px]">Reliable uptime, no matter where or when.</p>
            </li>
          </ul>
          <a href="<?php echo get_app_url(); ?>/flow/01/1/" class="inline-flex font-inter-tight items-center gap-[4px] hover:opacity-90 hover:gap-[8px] transition-all duration-300 text-[#0473C2] text-[18px] not-italic font-semibold leading-[140%] max-xsm:text-[16px] max-xsm:leading-[150%]">
            Sign Up for Free
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M9 18.8936L15 12.8936L9 6.89355" stroke="#0473C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </a>
        </div>
        <div class="max-lg:order-2 max-lg:w-full xl:py-[42px] xl:px-[32px] xsm:py-[28px] xsm:px-[21px] [20px] px-[15px] rounded-[12px] border-[1px] border-[solid] border-[#E4E4E7] bg-[#F4F4F5]">
          <img class="max-lg:max-w-[100%] max-xl:max-w-[410px] max-lg:w-full" loading="lazy" src="/imgs/reliable.webp" alt="Handyman service website displayed on a laptop, tablet, and smartphone." />
        </div>
      </div>
    </div>
  </section>

  <section class="single-testimonial">
    <div class="wrapper max-w-[1440px] m-auto lg:pb-[78px] lg:px-[80px] md:pb-[80px] md:px-[40px] xsm:pb-[40px] xsm:px-[32px] pb-[32px] px-[16px] flex flex-col md:gap-[40px] gap-[24px]">
      <h5 class="tracking-[0.18px] m-auto text-center font-inter-tight text-foreground text-[18px] font-semibold leading-[28px]">"I spent hours creating my website on another service, and it ended up lost on page 3 of Google search. After Voolt, my website is at the top of local search results, and all it took me was a few minutes."</h5>
      <div class="flex justify-center items-center gap-[16px]">
        <img loading="lazy" src="/imgs/troy.png" alt="Avatar" />
        <div>
          <p class="font-inter-tight text-foreground text-[18px] font-medium leading-[140%]">Troy W.</p>
          <p class="tracking-[0.16px] font-inter-tight text-muted-foreground text-[18px] font-medium leading-[140%]">K9 Training LLC</p>
        </div>
      </div>
    </div>
  </section>

  <section class="blog overflow-hidden">
    <div class="wrapper max-w-[1440px] m-auto lg:p-[80px] md:py-[80px] md:px-[40px] xsm:py-[40px] xsm:px-[32px] py-[32px] px-[16px] flex flex-col">
      <div class="text-center flex flex-col lg:gap-[20px] md:gap-[24px] xsm:gap-[20px] gap-[12px]">
        <p class="font-inter-tight text-blue-foreground xl:text-[14px] xl:leading-[20px] text-[16px] font-semibold leading-[24px] uppercase">Voolt Blog</p>
        <h2 class="font-inter-tight text-foreground md:text-[48px] font-bold md:leading-[120%] md:tracking-[0.48px] xsm:text-[32px] xsm:leading-[125%] text-[24px] leading-[130%]">Insights and tips from our experts</h2>
        <p class="font-inter-tight text-muted-foreground xl:max-w-[960px] xl:m-auto xsm:text-[22px] font-semibold xsm:leading-[135%] xsm:tracking-[-0.11px] text-[16px] leading-[24px] tracking-[0.16px]">Check out our latest articles.</p>
      </div>
      <div class="blog-holder mt-[39px] pb-[45px] relative">
        <div class="swiper-wrapper xl:flex xl:flex-wrap xl:gap-[40px]">
          <div class="swiper-slide relative blog-box xl:max-w-[calc(33%-23px)] w-full rounded-[24px] border-border border-[1px] bg-light-background overflow-hidden !flex flex-col">
            <a aria-label="Read more about Use Genuine Customer..." href="https://blog.voolt.com/categories/ai-industry-news/how-to-use-customer-testimonials/" class="absolute inset-0 z-[2]"></a>
            <img class="xsm:h-[260px] h-[200px] w-full object-cover" loading="lazy" src="/imgs/blog7.png" alt="Use Genuine Customer..." />
            <div class="xsm:py-[24px] xsm:px-[32px] py-[24px] px-[16px] flex flex-col gap-[24px] justify-between flex-grow">
              <div class="flex flex-col gap-[16px]">
                <p class="bg-blue-foreground rounded-[8px] max-w-fit p-[8px] text-white font-inter-tight text-[12px] font-semibold leading-[100%] uppercase">Blog post</p>
                <p class="font-inter-tight text-foreground font-semibold xsm:text-[22px] xsm:leading-[135%] text-[18px] leading-[28px]">Use Genuine Customer...</p>
                <p class="font-inter-tight text-muted-foreground font-semibold xsm:text-[18px] xsm:leading-[140%] text-[14px] leading-[20px]">In the digital age, where consumers are bombarded with endless choices and</p>
              </div>
              <a aria-label="Read more about Use Genuine Customer..." href="https://blog.voolt.com/categories/ai-industry-news/how-to-use-customer-testimonials/" class="font-inter-tight text-Color-Blue-500---primary font-semibold xsm:text-[18px] xsm:leading-[140%] text-[14px] leading-[20px]">Read More</a>
            </div>
          </div>
          <div class="swiper-slide blog-box relative xl:max-w-[calc(33%-23px)] w-full rounded-[24px] border-border border-[1px] bg-light-background overflow-hidden !flex flex-col">
            <a aria-label="Read more about Before and After: How an..." href="https://blog.voolt.com/categories/ai-industry-news/before-after-optimized-website/" class="absolute inset-0 z-[2]"></a>
            <img class="xsm:h-[260px] h-[200px] w-full object-cover" loading="lazy" src="/imgs/blog8.png" alt="Before and After: How an..." />
            <div class="xsm:py-[24px] xsm:px-[32px] py-[24px] px-[16px] flex flex-col gap-[24px] justify-between flex-grow">
              <div class="flex flex-col gap-[16px]">
                <p class="bg-blue-foreground rounded-[8px] max-w-fit p-[8px] text-white font-inter-tight text-[12px] font-semibold leading-[100%] uppercase">Blog post</p>
                <p class="font-inter-tight text-foreground font-semibold xsm:text-[22px] xsm:leading-[135%] text-[18px] leading-[28px]">Before and After: How an...</p>
                <p class="font-inter-tight text-muted-foreground font-semibold xsm:text-[18px] xsm:leading-[140%] text-[14px] leading-[20px]">Have you ever wondered why some home service businesses get all the... </p>
              </div>
              <a aria-label="Read more about Before and After: How an..." href="https://blog.voolt.com/categories/ai-industry-news/before-after-optimized-website/" class="font-inter-tight text-Color-Blue-500---primary font-semibold xsm:text-[18px] xsm:leading-[140%] text-[14px] leading-[20px]">Read More</a>
            </div>
          </div>
          <div class="swiper-slide blog-box xl:max-w-[calc(33%-23px)] w-full rounded-[24px] border-border border-[1px] bg-light-background overflow-hidden !flex flex-col">
            <a aria-label="Read more about How to use a Custom Domain..." href="https://blog.voolt.com/categories/ai-industry-news/how-to-use-a-custom-domain-with-voolt/" class="absolute inset-0 z-[2]"></a>
            <img class="xsm:h-[260px] h-[200px] w-full object-cover" loading="lazy" src="/imgs/blog9.png" alt="How to use a Custom Domain..." />
            <div class="xsm:py-[24px] xsm:px-[32px] py-[24px] px-[16px] flex flex-col gap-[24px] justify-between flex-grow">
              <div class="flex flex-col gap-[16px]">
                <p class="bg-blue-foreground rounded-[8px] max-w-fit p-[8px] text-white font-inter-tight text-[12px] font-semibold leading-[100%] uppercase">Blog post</p>
                <p class="font-inter-tight text-foreground font-semibold xsm:text-[22px] xsm:leading-[135%] text-[18px] leading-[28px]">How to use a Custom Domain...</p>
                <p class="font-inter-tight text-muted-foreground font-semibold xsm:text-[18px] xsm:leading-[140%] text-[14px] leading-[20px]">Have you ever wondered why some small businesses stand out online...</p>
              </div>
              <a aria-label="Read more about How to use a Custom Domain..." href="https://blog.voolt.com/categories/ai-industry-news/how-to-use-a-custom-domain-with-voolt/" class="font-inter-tight text-Color-Blue-500---primary font-semibold xsm:text-[18px] xsm:leading-[140%] text-[14px] leading-[20px]">Read More</a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination !bottom-0 !z-[2]"></div>
      </div>
    </div>
  </section>

  <?php include_once('./global/footer.php'); ?>

  <!-- swiper slider start  -->
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- swiper slider end  -->

  <script defer src="/js/main-mini.js"></script>

  <!-- animations -->
  <link rel="stylesheet" href="/odometer-theme-minimal.css" />
  <link rel="stylesheet" type="text/css" href="/style_anim.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

  <script type="text/javascript" src="/odometer.js"></script>

  <script src="/animations/MotionPathPlugin.min.js"></script>
  <script src="/animations/animations.js"></script>
</body>

</html>