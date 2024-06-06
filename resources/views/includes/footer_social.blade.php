@if ((string)$siteSetting->facebook_address !== '')
<a  class="font-white" href="{{ $siteSetting->facebook_address }}" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->google_plus_address !== '')
<a  class="font-white" href="{{ $siteSetting->google_plus_address }}" target="_blank"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->pinterest_address !== '')
<a  class="font-white" href="{{ $siteSetting->pinterest_address }}" target="_blank"><i class="fab fa-pinterest-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->twitter_address !== '')
<a  class="font-white" href="{{ $siteSetting->twitter_address }}" target="_blank"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->instagram_address !== '')
<a  class="font-white" href="{{ $siteSetting->instagram_address }}" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->linkedin_address !== '')
<a  class="font-white" href="{{ $siteSetting->linkedin_address }}" target="_blank"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->youtube_address !== '')
<a  class="font-white" href="{{ $siteSetting->youtube_address }}" target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->tumblr_address !== '')
<a  class="font-white" href="{{ $siteSetting->tumblr_address }}" target="_blank"><i class="fab fa-tumblr-square" aria-hidden="true"></i></a>
@endif
@if ((string)$siteSetting->flickr_address !== '')
<a  class="font-white" href="{{ $siteSetting->flickr_address }}" target="_blank"><i class="fab fa-flickr-square" aria-hidden="true"></i></a>
@endif