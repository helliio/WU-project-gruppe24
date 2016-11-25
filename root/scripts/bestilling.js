function setGetParameter(paramName, paramValue)
{
    var url = window.location.href;
    var hash = location.hash;
    url = url.replace(hash, '');
    if (url.indexOf(paramName + "=") >= 0)
    {
        var prefix = url.substring(0, url.indexOf(paramName));
        var suffix = url.substring(url.indexOf(paramName));
        suffix = suffix.substring(suffix.indexOf("=") + 1);
        suffix = (suffix.indexOf("&") >= 0) ? suffix.substring(suffix.indexOf("&")) : "";
        url = prefix + paramName + "=" + paramValue + suffix;
    }
    else
    {
    if (url.indexOf("?") < 0)
        url += "?" + paramName + "=" + paramValue;
    else
        url += "&" + paramName + "=" + paramValue;
    }
    window.location.href = url + hash;
}
function bestill(rullestol, vann, strom, korttid) {
    var nyURL = 'bekreft.php?';
    if (rullestol == 1) {
        nyURL += 'rs=1&';
    }
    if (vann == 1) {
        nyURL += 'vn=1&';
    }
    if (strom == 1) {
        nyURL += 'st=1&';
    }
    if (korttid == 1) {
        nyURL += 'kt=1&';
    }
    nyURL += 'js=1'
    window.location.href = nyURL;
}