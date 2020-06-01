var newwindow
var intId

function login() {
  var screenX =
    typeof window.screenX != "undefined" ? window.screenX : window.screenLeft
  var screenY =
    typeof window.screenY != "undefined" ? window.screenY : window.screenTop
  var outerWidth =
    typeof window.outerWidth != "undefined"
      ? window.outerWidth
      : document.body.clientWidth
  var outerHeight =
    typeof window.outerHeight != "undefined"
      ? window.outerHeight
      : document.body.clientHeight - 22
  var width = 500
  var height = 270
  var left = parseInt(screenX + (outerWidth - width) / 2, 10)
  var top = parseInt(screenY + (outerHeight - height) / 2.5, 10)
  var features =
    "width=" + width + ",height=" + height + ",left=" + left + ",top=" + top

  newwindow = window.open(
    "https://www.facebook.com/dialog/oauth?client_id=1872795756339558&redirect_uri=https%3A%2F%2Fkorova.com.br%2Ffblogin%2Findex%2Findex%2Fauth%2F1%2F%3F___SID%3DS&state=108a35d5328d16a1ec1ef5dac531c55b&display=popup&scope=email",
    "Login_by_facebook",
    features
  )

  if (window.focus) {
    newwindow.focus()
  }
  return false
}
