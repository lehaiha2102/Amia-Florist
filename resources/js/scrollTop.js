import $ from "jquery";

export function initScrollToTop() {
  const $scrollTopBtn = $("#scrollTopBtn");

  // Ẩn/hiện nút khi cuộn trang
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 300) {
      $scrollTopBtn.fadeIn();
    } else {
      $scrollTopBtn.fadeOut();
    }
  });

  // Sự kiện click để cuộn lên đầu trang
  $scrollTopBtn.on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, "smooth");
  });
}
