# Four O Four

You can trigger a 404 and show the 404 template by using the `{redirect="404"}` tag but this keeps the URL as it was entered.

This plugin will force a 301 redirect to the actual 404 URL.

* Replace `{redirect="404"}` with `{exp:fourofour:redirect}`.
* On your 404 template, force 404 headers by adding `{exp:fourofour:page}`.