$('#menu-social > li > a').removeClass("nav-link").addClass("");
$('.menusocial > li').addClass("list-inline-item");
$('#menu-navbar > li').addClass("nav-item");
$('.sub-menu > li').addClass("dropdown-item");
$('.sub-menu > li > a').removeClass("nav-link waves-effect waves-light");



/*$('.carousel1').carousel({
  interval: 3000
})
$('.carousel2').carousel({
  interval: 20000
})

$('.list-inline-item').attr('target', '_blank');
*/

$('#paginate > ul').removeClass("page-numbers").addClass("pagination pg-blue justify-content-center");
$('#paginate > ul >li').removeClass("page-numbers").addClass("page-item");
$('#paginate > ul >li >span').removeClass("page-numbers").addClass("page-link page-active");
$('#paginate > ul >li >a').removeClass("page-numbers").addClass("page-link");

$('#maindiv').width($('#div1').width());

$('#sidebar >li ').removeClass("widget widget_media_video").addClass("col-md-4 pb-4");
$('.facebook-feed >li ').removeClass("widget widget_easy_facebook_page_plugin").addClass("list-group-item");


$('#menu-social > li > a').removeClass("nav-link").addClass("");
twttr.widgets.createTimeline(
  {
    sourceType: "profile",
    screenName: "TwitterDev"
  },
  document.getElementById("container")
);
