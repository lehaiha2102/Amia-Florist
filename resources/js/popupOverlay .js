import $ from "jquery";

export function popupOverlay () {
    const $popupOverlay = $("#popup-overlay");
    const $popupBtn = $("#popup-btn");
    const $mainContent = $("#main-content");

    $popupBtn.on("click", function () {
        $popupOverlay.addClass("animate");

        setTimeout(() => {
            $popupOverlay.fadeOut(500, function () {
                $mainContent.fadeIn(500);
            });
        }, 1500);
    });
}
