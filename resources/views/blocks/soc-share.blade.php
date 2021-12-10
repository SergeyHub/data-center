
<div style="font-weight: bold; font-size: 18px;margin-bottom: 20px">{{ __('content.Поделиться') }}</div>
<div>
<nav class="soc-share">
    <div>
        <a href="javascript:void(0);" onclick="Share.vkontakte('{{url()->current()}}','{{$model->name}}','/images/soc_logo.png', '{{$model->meta_description}}')"><img src="/images/icons/socnet/vk.png"></a>
    </div>
    <div class="middle"></div>
    <div>
        <a href="javascript:void(0);" onclick="Share.facebook('{{url()->current()}}','{{$model->name}}','/images/soc_logo.png', '{{$model->meta_description}}')"><img src="/images/icons/socnet/fb.png"></a>
    </div>
    <div class="middle"></div>
    <div>
        <a href="javascript:void(0);" onclick="Share.twitter('{{url()->current()}}','{{$model->name}}')"><img src="/images/icons/socnet/twitter.png"></a>
    </div>
    <div class="middle"></div>
    <div>
        <a href="javascript:void(0);" onclick="Share.odnoklassniki('{{url()->current()}}','{{$model->name}}')"><img src="/images/icons/socnet/ok.png"></a>
    </div>
    <div class="middle"></div>
    <div>
        <a href="javascript:void(0);" onclick="Share.linkedin('{{url()->current()}}')"><img src="/images/icons/linkedin.svg"></a>
    </div>
    <div class="middle"></div>
    <!--<div>
        <img src="/images/icons/socnet/plus.png">
    </div>-->

</nav>
</div>
<script>
    Share = {
        vkontakte: function(purl, ptitle, pimg, text) {
            url  = 'http://vkontakte.ru/share.php?';
            url += 'url='          + encodeURIComponent(purl);
            url += '&title='       + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&image='       + encodeURIComponent(pimg);
            url += '&noparse=true';
            Share.popup(url);
        },
        odnoklassniki: function(purl, text) {
            url  = 'https://connect.ok.ru/offer?';
            url += 'url='    + encodeURIComponent(purl);
            url += '&title' + encodeURIComponent(text);
            Share.popup(url);
        },
        facebook: function(purl, ptitle, pimg, text) {
            url  = 'http://www.facebook.com/sharer.php?s=100';
            url += '&p[title]='     + encodeURIComponent(ptitle);
            url += '&p[summary]='   + encodeURIComponent(text);
            url += '&p[url]='       + encodeURIComponent(purl);
            url += '&p[images][0]=' + encodeURIComponent(pimg);
            Share.popup(url);
        },
        twitter: function(purl, ptitle) {
            url  = 'http://twitter.com/share?';
            url += 'text='      + encodeURIComponent(ptitle);
            url += '&url='      + encodeURIComponent(purl);
            url += '&counturl=' + encodeURIComponent(purl);
            Share.popup(url);
        },
        mailru: function(purl, ptitle, pimg, text) {
            url  = 'http://connect.mail.ru/share?';
            url += 'url='          + encodeURIComponent(purl);
            url += '&title='       + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&imageurl='    + encodeURIComponent(pimg);
            Share.popup(url)
        },
        linkedin: function(purl) {
            url  = 'https://www.linkedin.com/cws/share?';
            url += 'url='          + encodeURIComponent(purl);
            Share.popup(url)
        },

        popup: function(url) {
            window.open(url,'','toolbar=0,status=0,width=626,height=436');
        }
    };
</script>