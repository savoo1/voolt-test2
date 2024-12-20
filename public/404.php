<!DOCTYPE html>
<html lang="en">
<?php include_once('./global/head.php'); ?>

<body>
  <?php include_once('./global/navigation.php'); ?>

    <!-- TO be replace with actual 404 page design -->
    <section class="">
      <div class="wrapper max-w-[1440px] m-auto lg:pt-[166px] md:py-[80px] md:pt-[150px] md:px-[40px] xsm:py-[40px] xsm:pt-[120px] xsm:px-[32px] pt-[100px] pb-[32px] px-[16px] flex flex-col md:gap-[22px] xsm:gap-[22px] gap-[16px]">
        <img class="max-sm:max-w-[100px] m-auto" src="/imgs/404.webp" alt="">
        <h1 class="max-sm:text-[32px] font-inter-tight text-[#09090B] tracking-[0.48px] text-center text-[48px] not-italic font-bold leading-[120%]">Page not found</h1>
        <p class="max-sm:text-[16px] mt-[5px] font-inter-tight text-[#71717A] tracking-[-0.11px] text-center text-[22px] not-italic font-semibold leading-[135%]">
            We're sorry, but it seems your page wasn't found. This can happen due to inactivity <br class="max-lg:hidden">
            or a temporary server issue. Please click the button below to refresh <br class="max-lg:hidden">
            your browser and regain access to your account. If the problem persists,  <br class="max-lg:hidden">
            feel free to contact our support team for assistance.
        </p>
        <div class="flex gap-[12px] mt-[2px] items-center max-md:gap-[8px] m-auto">
            <a href="/" aria-label="Go to voolt homepage" class="flex px-[16px] py-[9px] justify-center items-center gap-[8px] rounded-[6px] bg-[#FCC82C] text-[#27272A] font-inter-tight text-[14px] not-italic font-medium leading-[20px] hover:bg-primary/90 transition-all duration-300 max-xsm:text-[12px] max-xsm:leading-[150%] max-xsm:px-[12px] max-xsm:py-[6px]">Home</a>
            <a href="https://help.voolt.com/hc/en-us" class="flex px-[16px] py-[9px] justify-center items-center gap-[8px] border-[1px] border-[solid] border-[#E4E4E7] rounded-[6px] bg-[#fff] text-[#27272A] font-inter-tight text-[14px] not-italic font-medium leading-[20px] hover:bg-muted transition-all duration-300 max-xsm:text-[12px] max-xsm:leading-[150%] max-xsm:px-[12px] max-xsm:py-[5px]">Support
            </a>
          </div>
      </div>
    </section>
     <!-- //TO be replace with actual 404 page design -->

  <?php include_once('./global/footer.php'); ?>

  <script defer src="/js/main-mini.js"></script>
</body>

</html>