window.fbAsyncInit = function() {
    FB.init({
        appId      : '878518675507348', // App ID
        channelUrl : 'YOUR_WEBSITE_CHANNEL_URL',
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
    });
};

(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));

function Login()
{

    FB.login(function(response) {
        if (response.authResponse)
        {
            getUserInfo(); // Get User Information.

        } else
        {
            console.log('Authorization failed.');
        }
    },{scope: 'email'});

}

function getUserInfo() {
    FB.api('/me', function(response) {

        //response.name       - User Full name
        //response.link       - User Facebook URL
        //response.username   - User name
        //response.id         - id
        //response.email      - User email

    });
}

FB.Event.subscribe('auth.authResponseChange', function(response)
{
    if (response.status === 'connected')
    {
        alert('Connected');
        //SUCCESS
    }
    else if (response.status === 'not_authorized')
    {
        alert('Failed');
        //FAILED
    } else
    {
        //UNKNOWN ERROR. Logged Out
    }
});

function Logout()
{
    FB.logout(function(){document.location.reload();});

}
