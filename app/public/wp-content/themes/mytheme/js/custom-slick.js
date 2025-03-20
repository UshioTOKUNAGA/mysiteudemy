// MVスライダー
jQuery(function ($) {
  $(".mv-area").slick({
    autoplay: true, // 自動再生
    autoplaySpeed: 3000, // 自動再生で切り替えをする時間（ミリ秒）
    speed: 800, // 自動再生でスライドさせるスピード（ミリ秒）
    infinite: true, // 無限スクロール
    slidesToShow: 1, // スライドのエリアに表示するスライドの数
    slidesToScroll: 1, // 一度にスライドする数
    arrows: true, // 左右の次へ、前へボタンを表示
    dots: true, // 画像下のドット（ページ送り）を表示
    centerMode: true, // 中央寄せ
    centerPadding: "0", // 中央寄せ時のパディングをゼロに
  });
});
