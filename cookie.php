<?php



$response = file_get_contents('https://raw.githubusercontent.com/byte-capsule/Toffee-Channels-Link-Headers/main/toffee_channel_data.json');

$json_data = json_decode($response, true);
$link=$json_data["channels"]["3"]["headers"]["cookie"];

$cookie = $link;

$response2 = file_get_contents('https://raw.githubusercontent.com/byte-capsule/Toffee-Channels-Link-Headers/main/toffee_channel_data.json');

$json_data2 = json_decode($response2, true);
$link2=$json_data2["channels"]["0"]["headers"]["cookie"];



$cookie2 = $link2;


$response3 = file_get_contents('https://raw.githubusercontent.com/byte-capsule/TSports-m3u8-Grabber/main/TSports_m3u8_headers.Json');

$json_data3 = json_decode($response3, true);
$link3=$json_data3["channels"]["0"]["headers"]["Cookie"];



$cookie3 = $link3;



?>



[

  {
    "name":"PEACE TV BANGLA",
    "link":"https://dzkyvlfyge.erbvr.com/PeaceTvBangla/tracks-v3a1/mono.m3u8",
    "logo":"https://i.ibb.co/vwxzDSF/IMG-20240302-221713.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
  
  {
    "name":"PEACE TV URDU",
    "link":"https://dzkyvlfyge.erbvr.com/PeaceTvUrdu/tracks-v3a1/mono.m3u8",
    "logo":"https://i.postimg.cc/bJTNQ35c/images-1.jpg",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
  
  {
    "name":"PEACE TV ENGLISH",
    "link":"https://dzkyvlfyge.erbvr.com/PeaceTvEnglish/tracks-v3a1/mono.m3u8",
    "logo":"https://i.postimg.cc/vHnkkcQD/Peace-TV-official-logo.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },

  {
    "name":"ISLAM BANGLA",
    "link":"https://pull-cdnw.anystream.uk/live/cf46c8b0018c10009acded4c00000000/playlist.m3u8",
    "logo":"https://i.ibb.co/VjGgqcc/images-2024-03-02-T220831-913.jpg",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },

  {
    "name":"T20 English",
    "link":"https://hdstreamz.vip/sports/mu1.php?e=.m3u8|referer=bokulsports.com",
    "logo":"https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },

  {
    "name": "T20 World Cup ",
    "link": "https://mprod-cdn.toffeelive.com/live/match-1/index.m3u8",
    "logo": "https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin": "https://mprod-cdn.toffeelive.com",
    "referrer": "https://mprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie2 ?>",
    "drmScheme": "",
    "drmLicense": ""
  },

   {
    "name":"T20 World Cup ",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium65/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
   {
    "name":"T20 World Cup",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium270/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
   {
    "name":"T20 World Cup",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium450/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },

 {
    "name":"T20 World Cup",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium598/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
 
  {
    "name":"T20 World Cup",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium370/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/PJqKvHnm/download-2.jpg",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
   {
    "name":"T Sports HD ",
    "link":"https://live-cdn.tsports.com/live-01/index.m3u8",
    "logo":"https://i.postimg.cc/8PQzXnkV/mobile-logo-LIVE-1-64e4dd8e16430.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":"<?php echo $cookie3 ?>"
  },
   {
    "name":"T Sports HD ",
    "link":"https://live-cdn.tsports.com/live-02/index.m3u8",
    "logo":"https://i.postimg.cc/8PQzXnkV/mobile-logo-LIVE-1-64e4dd8e16430.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":"<?php echo $cookie3 ?>"
  },
 
   {
    "name":"Star Sports 1 Hindi",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium268/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/hvB3J57m/Star-Sports-Live-Cricket-Streaming.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
   {
    "name":"Star Sports 1 ",
    "link":"http://41.205.93.154/STARSPORTS1/index.m3u8",
    "logo":"https://i.postimg.cc/hvB3J57m/Star-Sports-Live-Cricket-Streaming.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },

   {
    "name":"S Cricket",
    "link":"https://cdn-1.bdiptv24.line.pm/live/SP/index.m3u8",
    "logo":"https://i.postimg.cc/GmQ0kntF/ptv.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
    "name":"PTV Sports ",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium450/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/GmQ0kntF/ptv.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
  {
    "name":"IPL LIVE ",
    "link":"https://webhdrus.onlinehdhls.ru/lb/premium284/index.m3u8|referer=https://claplivehdplay.ru/",
    "logo":"https://i.postimg.cc/HsxfwpJS/Copy_of_LOGOHUB.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
    "cookie":""
  },
  
  {
    "name":"Atnnat",
    "link":"https://d10rltuy0iweup.cloudfront.net/ATNNAT/myStream/playlist.m3u8",
    "logo":"https://i.postimg.cc/zXy3Vt0C/Ariana-Television-Network-ATN-New-Latest-Frequency-2021-talysports-com-390x220.jpg",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
  
  {
    "name":"Sky Open",
    "link":"https://linear-p.media.skyone.co.nz/primeplus1.clear_2.m3u8",
    "logo":"https://i.imgur.com/5YxbUFg.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
  {
    "name":"DUBAI SPORTS HD",
    "link":"http://dmitwlvvll.cdn.mangomolo.com/dubaisportshd/smil:dubaisportshd.smil/chunklist.m3u8",
    "logo":"https://static.wikia.nocookie.net/logopedia/images/2/27/Dubai_sports_2019.jpg",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },

  {
    "name": "TOFFEE Live 1 VIP",
    "link": "https://mprod-cdn.toffeelive.com/live/match-1/index.m3u8",
    "logo": "https://images.toffeelive.com/images/program/300097/logo/240x240/mobile_logo_060681001717400250.png",
    "origin": "https://mprod-cdn.toffeelive.com",
    "referrer": "https://mprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie2 ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "TOFFEE Live 2 VIP",
    "link": "https://mprod-cdn.toffeelive.com/live/match-2/index.m3u8",
    "logo": "https://images.toffeelive.com/images/program/298434/logo/240x240/mobile_logo_182385001717400375.png",
    "origin": "https://mprod-cdn.toffeelive.com",
    "referrer": "https://mprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie2 ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "TOFFEE Live 3",
    "link": "https://mprod-cdn.toffeelive.com/live/match-3/index.m3u8",
    "logo": "https://images.toffeelive.com/images/program/300099/logo/240x240/mobile_logo_332351001717400403.png",
    "origin": "https://mprod-cdn.toffeelive.com",
    "referrer": "https://mprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie2 ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
    {
    "name": "TOFFEE Live 4",
    "link": "https://mprod-cdn.toffeelive.com/live/match-4/index.m3u8",
    "logo": "https://images.toffeelive.com/images/program/290543/logo/240x240/mobile_logo_754642001711455145.png",
    "origin": "https://mprod-cdn.toffeelive.com",
    "referrer": "https://mprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie2 ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  
 
  {
    "name": "TOFFEE Sports VIP",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/sports_highlights/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/19779/logo/240x240/mobile_logo_132014001696928877.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  

  
  {
    "name": "TOFFEE Dramas",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/toffee_drama/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/44878/logo/240x240/mobile_logo_889093001687255310.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },

 
 
  {
    "name": "TOFFEE Movies VIP",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/toffee_movie/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2708/logo/240x240/mobile_logo_406284001687254721.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  
  {
    "name": "Star Jalsha VIP",
    "link": "https://catchup.yuppcdn.net/amazonv2/36/preview/starjalsha/master/chunklist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/18832/logo/240x240/mobile_logo_166779001683805822.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Somoy TV",
    "link": "https://livess.ncare.live/live-orgin/somoyt000011226615544544.stream/chunks.m3u8",
    "logo": "https://images.toffeelive.com/images/program/65/logo/240x240/mobile_logo_703286001655891016.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },


  {
    "name": "Colors Bangla",
    "link": "https://catchup.yuppcdn.net/amazonv2/36/preview/colorsbanglahd/master/chunklist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2505/logo/240x240/mobile_logo_200057001655891962.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  
  {
    "name": "Ekattor TV",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@EkattorTelevision",
    "logo": "https://images.toffeelive.com/images/program/53/logo/240x240/mobile_logo_107276001655890949.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Independent TV",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@IndependentTelevision",
    "logo": "https://images.toffeelive.com/images/program/40/logo/240x240/mobile_logo_819689001655890845.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Channel 24",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@channel24digital",
    "logo": "https://images.toffeelive.com/images/program/52/logo/240x240/mobile_logo_262737001655890931.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "DBC News",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@dbcnewstv",
    "logo": "https://images.toffeelive.com/images/program/335/logo/240x240/mobile_logo_946452001655891077.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "ATN News",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@atnnewsltd",
    "logo": "https://images.toffeelive.com/images/program/42/logo/240x240/mobile_logo_554709001657185722.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Jamuna TV",
    "link": "https://livess.ncare.live/live-orgin/jamuna-test-sample-ok.stream/chunks.m3u8",
    "logo": "https://images.toffeelive.com/images/program/46/logo/240x240/mobile_logo_222968001673182917.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Channel i",
    "link": "https://livess.ncare.live/live-orgin/channeli-8-org.stream/chunks.m3u8",
    "logo": "https://images.toffeelive.com/images/program/3/logo/240x240/mobile_logo_694865001655890816.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "RTV",
    "link": "https://livess.ncare.live/live-orgin/rtv-sg.stream/chunks.m3u8",
    "logo": "https://images.toffeelive.com/images/program/338/logo/240x240/mobile_logo_401499001655891091.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "NTV",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@Ntvbdnews",
    "logo": "https://images.toffeelive.com/images/program/41/logo/240x240/mobile_logo_811238001673183089.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Banglavision",
    "link": "https://bdviptv.000webhostapp.com/yt.php?c=@BanglaVisionNEWS",
    "logo": "https://images.toffeelive.com/images/program/337/logo/240x240/mobile_logo_519481001656610377.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "ATN Bangla",
    "link": "https://livess.ncare.live/live-orgin/atnbd-8-org.stream/chunks.m3u8",
    "logo": "https://images.toffeelive.com/images/program/38/logo/240x240/mobile_logo_483871001656610198.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "MY TV",
    "link": "https://myflixbd.com/0.m3u8",
    "logo": "https://images.toffeelive.com/images/program/339/logo/240x240/mobile_logo_897303001655891103.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
 
  {
    "name": "Bangla TV",
    "link": "https://byphdgllyk.gpcdn.net/hls/banglatvbd/index.m3u8",
    "logo": "https://images.toffeelive.com/images/program/375/logo/240x240/mobile_logo_453885001655891270.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Desh TV",
    "link": "https://deshitv.deshitv24.net/live/myStream/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/39/logo/240x240/mobile_logo_569553001668421527.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },

  {
    "name": "SONY MAX",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009249&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/352/logo/240x240/mobile_logo_612341001666782969.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },

  {
    "name": "SONY ENTERTAINMENT TELEVISION",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009246&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/57/logo/240x240/mobile_logo_149299001666780350.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY SAB HD",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009248&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2420/logo/240x240/mobile_logo_688156001666785674.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY SAB",
    "link": "https://keralamaxtv.com/sony/watch.php?id=1000009248&e=.m3u8?|referer=https://keralamaxtv.com/rriptv.m3u8",
    "logo": "https://images.toffeelive.com/images/program/342/logo/240x240/mobile_logo_512950001666785776.png",
    "origin": "",
    "referrer": "https://keralamaxtv.com/rriptv.m3u8",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY MAX 2",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/353/logo/240x240/mobile_logo_044841001666779831.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY WAH",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009253&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2422/logo/240x240/mobile_logo_037670001666785867.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Sony Pal",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009273&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2421/logo/240x240/mobile_logo_799518001666784496.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  
  {
    "name": "Nick",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/nick/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2430/logo/240x240/mobile_logo_823707001655891853.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },

  {
    "name": "Cartoon Network",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/cartoon_network_sd/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/27232/logo/240x240/mobile_logo_320294001679201065.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY YAY",
    "link": "https://keralamaxtv.com/sony/watch.php?id=1000001971&e=.m3u8?|referer=https://keralamaxtv.com/rriptv.m3u8",
    "logo": "https://images.toffeelive.com/images/program/612/logo/240x240/mobile_logo_091186001666784752.png",
    "origin": "",
    "referrer": "https://keralamaxtv.com/rriptv.m3u8",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  
  {
    "name": "Discovery Kids",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/discovery_kids/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/611/logo/240x240/mobile_logo_430542001673177743.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Nick Jr",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/nick_junior/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2435/logo/240x240/mobile_logo_910829001655891932.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "Pogo",
    "link": "https://bldcmprod-cdn.toffeelive.com/cdn/live/pogo_sd/playlist.m3u8",
    "logo": "https://images.toffeelive.com/images/program/27159/logo/240x240/mobile_logo_740957001679201029.png",
    "origin": "https://bldcmprod-cdn.toffeelive.com",
    "referrer": "https://bldcmprod-cdn.toffeelive.com",
    "userAgent": "Toffee (Linux; Telegram:https://t.me/rriptv) AndroidXMedia3/1.1.1/64103898/4d2ec9b8c7534adc",
    "cookie": "<?php echo $cookie ?>",
    "drmScheme": "",
    "drmLicense": ""
  },

  {
    "name": "SONY PIX HD",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009258&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/2419/logo/240x240/mobile_logo_287412001666784602.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY PIX",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009258&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/397/logo/240x240/mobile_logo_049568001666785583.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  
  {
    "name": "SONY BBC EARTH HD",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009252&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/670/logo/240x240/mobile_logo_363688001655891620.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  {
    "name": "SONY BBC EARTH",
    "link": "https://sony.tamilbulbtv.live/watch.php?id=1000009252&e=.m3u8?|referer=https://sony.tamilbulbtv.live/watch.php?id=1000044878&e=.m3u8",
    "logo": "https://images.toffeelive.com/images/program/396/logo/240x240/mobile_logo_708825001655891324.png",
    "origin": "",
    "referrer": "",
    "userAgent": "",
    "cookie": "",
    "drmScheme": "",
    "drmLicense": ""
  },
  
{
     "name":"B4U KADAK",
    "link":"https://idvd.multitvsolution.com/idvo/moviehouse_540p.m3u8",
    "logo":"https://i.postimg.cc/tTdBqVM4/zdkmQbLP.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
  {
     "name":"Enterr10Bangla",
    "link":"https://live-bangla.akamaized.net/liveabr/pub-iobanglakp3sff/live_480p/chunks.m3u8",
    "logo":"https://i.postimg.cc/jjFCdvP7/Copy_of_Copy_of_FIFA_LIVE_(2).png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
    {
     "name":"Event TV",
    "link":"https://edge4-moblive.yuppcdn.net/transsd/smil:eventtv.smil/playlist.m3u8",
    "logo":"https://i.postimg.cc/jjFCdvP7/Copy_of_Copy_of_FIFA_LIVE_(2).png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
    {
     "name":"Sun Bangla",
    "link":"https://live.sunbanglacinema.in/sunbanglacinema/index.m3u8",
    "logo":"https://i.postimg.cc/jjFCdvP7/Copy_of_Copy_of_FIFA_LIVE_(2).png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
  {
    "name":"Willow HD",
    "link":"http://xtv.ooo:8080/shahz18/18usman/220064",
    "logo":"https://i.postimg.cc/W3KsDxLS/willowhd.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
    "name":"WILLOW CRICKET XTRA",
    "link":"http://xtv.ooo:8080/shahz18/18usman/167582",
    "logo":"https://i.postimg.cc/X79ybkdt/willowxtra.png",
    "origin":"",
    "referrer":"http://eamintalukdar.xyz",
    "userAgent":"",
    "cookie":""
  },
  {
    "name":"A SPORTS ",
    "link":"http://xtv.ooo:8080/shahz18/18usman/219689",
    "logo":"https://i.postimg.cc/G38Zbp33/asports.jpg",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
    "name":"TEN SPORTS",
    "link":"http://xtv.ooo:8080/shahz18/18usman/167569",
    "logo":"https://i.postimg.cc/QtCH0xR1/ten_sports.jpg",
    "origin":"",
    "referrer":"",
    "userAgent":"Eamin Vai",
    "cookie":""
  },
  {
    "name":"TEN CRICKET",
    "link":"http://xtv.ooo:8080/shahz18/18usman/167587",
    "logo":"https://i.postimg.cc/QtCH0xR1/ten_sports.jpg",
    "origin":"",
    "referrer":"",
    "userAgent":"Eamin Vai",
    "cookie":""
  },

  {
    "name":"ASTRO CRICKET",
    "link":"http://xtv.ooo:8080/shahz18/18usman/167581",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
{
    "name":"Jalsha Movies",
    "link":"http://tv.mototvlive.net:8880/salman/salman/15893",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
    "name":"Sananda Tv",
    "link":"https://fr.tvanondo.online/sananda/video.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },

  {
    "name":"Sun Bangla Cinema",
    "link":"https://live.sunbanglacinema.in/sunbanglacinema/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
    "name":"Bangla +",
    "link":"https://live-stream.utkalbongo.com/hls/livebanglatvstream.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },

  {
    "name":"Amar Digital",
    "link":"https://live-stream.utkalbongo.com/utkalbongo/stream2/hls/amarbanglatwolivestream.m3u8",
   "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },


 {
    "name":"Star Jalsha",
    "link":"http://tv.mototvlive.net:8880/salman/salman/2533",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },

  {
  "name":"WWE",
    "link":"https://ctrl.laotv.la/live/WWE/index.m3u8",
    "logo":"https://upload.wikimedia.org/wikipedia/en/8/8c/WWE_Network_logo.jpeg",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
   {
  "name":"BBO",
    "link":"https://bdviptv.000webhostapp.com/yupptvm3u8.php?c=bbo",
    "logo":"https://i.postimg.cc/yxmnbsh1/download.png",
    "origin":"",
    "referrer":"https://www.t.me/rriptv",
    "userAgent":"rriptv",
    "cookie":""
  },
{
  "name":"MBC Bollywood",
    "link":"https://shls-mbcbollywood-prod-dub.shahid.net/out/v1/a79c9d7ef2a64a54a64d5c4567b3462a/index_1.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
{
  "name":"SONYMAX USA",
    "link":"http://170.254.18.107/SONYMAX/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"SONYMAX HD",
    "link":"http://89.187.177.137:8081/SONYMAX/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"SONYMAX HD",
    "link":"https://tv5.hoichoi24.com/1607/tracks-v1a1/mono.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"CINEPLEX HD",
    "link":"http://170.254.18.107/CINEPLEX/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  }, {
  "name":"BFlix Movies",
    "link":"https://idvd.multitvsolution.com/idvo/bflixmovies.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"&FLIX HD",
    "link":"http://89.187.177.137:8081/&FLIX/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"THE Q",
    "link":"https://vg-theqlive.akamaized.net/v1/manifest/611d79b11b77e2f571934fd80ca1413453772ac7/vglive-sk-306905/9750c1d5-0ca6-4ad4-a87a-6d62e308e36d/1.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"ZEE World",
    "link":"https://da6c334e.wurl.com/master/f36d25e7e52f1ba8d7e56eb859c636563214f541/U2Ftc3VuZy1nYl9aZWVXb3JsZF9ITFM/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"Sony",
    "link":"http://170.254.18.107/SONY/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"COLORS",
    "link":"http://170.254.18.107/COLORS/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"Sony Kal",
    "link":"https://spt-sonykal-1-us.lg.wurl.tv/playlist_192k.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"ZEE TV HD",
    "link":"http://170.254.18.107/ZEE/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"Nazara",
    "link":"https://epiconvh.s.llnwi.net/nazara/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"DANGAL TV",
    "link":"https://live-dangal.akamaized.net/liveabr/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"Shema Bollywood",
    "link":"https://cdn-uw2-prod.tsv2.amagi.tv/linear/amg00864-shemarooenterta-shemabollywood-ono/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
   {
  "name":"Sangeet Bangla",
    "link":"https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Sangeetbangla/default/sangeetbangla.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Enter10",
    "link":"http://longstream-04.ajaah.com/PlayBoxTV/Enter10/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Movie Club",
    "link":"https://i.mjh.nz/SamsungTVPlus/INBD21000016Y.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Bollywood Prime",
    "link":"https://dai.google.com/linear/hls/event/yvQpXDAeRMGU25KTu--V6Q/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Classic Bollywood",
    "link":"https://d35j504z0x2vu2.cloudfront.net/v1/master/0bc8e8376bd8417a1b6761138aa41c26c7309312/bollywood-classic/manifest.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"ZEECINEMA",
    "link":"http://170.254.18.107/ZEECINEMA/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Zee Aflam",
    "link":"https://weyyak-live.akamaized.net/weyyak_zee_aflam/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Dabangg",
    "link":"https://i.mjh.nz/SamsungTVPlus/INBC150001539.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Dabangg",
    "link":"http://longstream-03.ajaah.com/PlayBoxTV/Dabangg/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Bhojpuri Cinema",
    "link":"https://live-bhojpuri.akamaized.net/liveabr/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Bhojpuri Cinema",
    "link":"https://i.mjh.nz/SamsungTVPlus/INBD1300017QS.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Filamchi",
    "link":"https://epiconvh.s.llnwi.net/filamchi/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"MahaMovies",
    "link":"http://longstream-04.ajaah.com/PlayBoxTV/MahaMovies/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"epic",
    "link":"https://epiconvh.s.llnwi.net/epic/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"ishaara",
    "link":"https://epiconvh.s.llnwi.net/ishaara/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"ishaara",
    "link":"https://epiconvh.s.llnwi.net/ishaara/master_480.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Bollywood Hungama",
    "link":"https://yuppmedtaorire.akamaized.net/v1/master/a0d007312bfd99c47f76b77ae26b1ccdaae76cb1/bollywoodhungama_live_https/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Zoom",
    "link":"https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Zoom/default/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Joomusic",
    "link":"https://livecdn.live247stream.com/joomusic/tv/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Showbox",
    "link":"https://epiconvh.s.llnwi.net/showbox/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"E24",
    "link":"http://longstream-04.ajaah.com/PlayBoxTV/E24/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Mastiii",
    "link":"https://i.mjh.nz/SamsungTVPlus/INBB28000060I.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Mastiii",
    "link":"http://longstream-03.ajaah.com/PlayBoxTV/Masti/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"9Xjalwa",
    "link":"#https://d75dqofg5kmfk.cloudfront.net/bpk-tv/9Xjalwa/default/9XJalwa.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"9Xjalwa",
    "link":"http://longstream-03.ajaah.com/PlayBoxTV/9XJalwa/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"9xm",
    "link":"https://d2q8p4pe5spbak.cloudfront.net/bpk-tv/9XM/9XM.isml/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"9xm",
    "link":"http://longstream-03.ajaah.com/PlayBoxTV/9XM/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Musicindia",
    "link":"https://d75dqofg5kmfk.cloudfront.net/bpk-tv/Musicindia/default/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Musicindia",
    "link":"http://longstream-03.ajaah.com/PlayBoxTV/MusicIndia/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Sangeetbhojpuri",
    "link":"https://d1g8wgjurz8via.cloudfront.net/bpk-tv/Sangeetbhojpuri/default/sangeetbhojpuri-audio_208482_und=208000-video=247600.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Kids Hindi",
    "link":"https://varun-iptv.netlify.app/m3u/discoverykidshindi.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Kids Kannada",
    "link":"https://varun-iptv.netlify.app/m3u/discoverykidskannada.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Kids Malayalam",
    "link":"https://varun-iptv.netlify.app/m3u/discoverykidsmalayalam.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Kids Tamil",
    "link":"https://varun-iptv.netlify.app/m3u/discoverykidstamil.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Kids Telugu",
    "link":"https://varun-iptv.netlify.app/m3u/discoverykidstelugu.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Hindi",
    "link":"https://varun-iptv.netlify.app/m3u/discoveryhindi.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Bengali",
    "link":"https://varun-iptv.netlify.app/m3u/discoverybengali.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery English",
    "link":"https://varun-iptv.netlify.app/m3u/discoveryenglish.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Kannada",
    "link":"https://varun-iptv.netlify.app/m3u/discoverykannada.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Malayalam",
    "link":"https://varun-iptv.netlify.app/m3u/discoverymalayalam.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Tamil",
    "link":"https://varun-iptv.netlify.app/m3u/discoverytamil.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Telugu",
    "link":"https://varun-iptv.netlify.app/m3u/discoverytelugu.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Turbo",
    "link":"https://varun-iptv.netlify.app/m3u/Discovery_Turbo.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Investigation Discovery",
    "link":"https://varun-iptv.netlify.app/m3u/Investigation_Discovery.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Discovery Science",
    "link":"https://varun-iptv.netlify.app/m3u/Discovery_Science.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"TLC",
    "link":"https://varun-iptv.netlify.app/m3u/TLC.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Animal Planet",
    "link":"https://varun-iptv.netlify.app/m3u/Animal_Planet.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"DMAX",
    "link":"https://varun-iptv.netlify.app/m3u/DMAX.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"TRVL",
    "link":"https://varun-iptv.netlify.app/m3u/TRVL_Channel.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"HGTV",
    "link":"https://varun-iptv.netlify.app/m3u/HGTV.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Food Network",
    "link":"https://varun-iptv.netlify.app/m3u/Food%20Network.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Premier Sports 1",
    "link":"http://202.21.104.6:88/sps-prime/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Premier Sports 2",
    "link":"http://202.21.104.6:88/sps-play/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Premier Sports 3",
    "link":"http://202.21.104.6:88/sps-world/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Premier Sports 4",
    "link":"http://202.21.104.6:88/sps-action/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Premier Sports 5",
    "link":"http://202.21.104.6:88/sps-plus/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"True Premier 1",
    "link":"https://ctrl.laotv.la/live/TSport1/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"True Premier 2",
    "link":"https://ctrl.laotv.la/live/TSport2/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"SSC 1",
    "link":"https://af.ayassport.ir/hls2/ssc1.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Bein Sports-Xtra-en",
    "link":"https://d35j504z0x2vu2.cloudfront.net/v1/master/0bc8e8376bd8417a1b6761138aa41c26c7309312/bein-sports-xtra-en-espanol/playlist.m3u8",
    "logo":"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjM3eCMwSL0SLs_IKmXf5Cp0WafuYmzK3Vcmo6gSSJdAv7Us-V1usSJLBaNfUacYCQKqqGrxcJbpt5alUleM3Ln7YO1A8gXAKeYr4o3g5zAOT-Rd2t9qDWu_RP17dfwsWuDp7ptL8JrXy6PU4iiU24L63vcsb7Bnmlczb2WMJnQSNh44NoxJCg5bJZPNrE/w680/download%20%2825%29.jpeg",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Bein Sports 1",
    "link":"https://edge2.laotv.la/live/Bsport1/sc-gaFECQ/v1_index.m3u8",
    "logo":"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh2a2UUOG81KKZSlXK7GxbaihAy8BJYMXL9q36K55M9xMD4kP_lGQgoyD7FP0dIkB-OwGnCJ47WEsw4uAfJchUAltDqBjitC5xWcIlVKT2o3OiLaX7hUBskw4WqHXvQTZsnO3KKTTsBmr2A6REcRuSAcZxk93_t00GYSgneDT76TZhTTPVOznMh6vc2GEg/w680/download%20%281%29%20%2816%29.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Brat TV",
    "link":"https://brat-rakuten.amagi.tv/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {
  "name":"Star Movies HD",
    "link":"http://172.17.50.112/live/antbd1003/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Action Hollywood Movie",
    "link":"https://amg01076-lightningintern-actionhollywood-samsungnz-82rry.amagi.tv/playlist/amg01076-lightningintern-actionhollywood-samsungnz/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"AXN",
    "link":"http://168.227.22.18:1935/live/mobile-048/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"KIX",
    "link":"http://210.210.155.35:80/dr9445/h/h07/01.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"My Cinema",
    "link":"http://210.210.155.35/uq2663/h/h192/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"AMG TV",
    "link":"https://2-fss-2.streamhoster.com/pl_138/201660-1270634-1/chunklist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Dubai One ",
    "link":"https://dminnvll.cdn.mangomolo.com/dubaione/smil:dubaione.stream.smil/chunklist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Gusto TV",
    "link":"https://amg01077-gustoworldwidem-gustotv-cineverse-h7u1r.amagi.tv/playlist/amg01077-gustoworldwidem-gustotv-cineverse/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Love Stories TV",
    "link":"https://84e619480232400a842ce499d053458a.mediatailor.us-east-1.amazonaws.com/v1/manifest/04fd913bb278d8775298c26fdca9d9841f37601f/ONO_LoveStoriesTV/18a65393-ba3b-4912-90d5-7188c128ac66/3.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Dove Channel",
    "link":"https://amg01201-cinedigmenterta-dove-cineverse-1fck5.amagi.tv/playlist/amg01201-cinedigmenterta-dove-cineverse/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"ION Mystery",
    "link":"https://scripps-ionmystery-1-us.xumo.wurl.tv/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"MOVIE SPHERE",
    "link":"https://moviesphereuk-samsunguk.amagi.tv/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"KIDS CREATION Bangla Tv",
    "link":"https://vods1.aynaott.com/kidscreation_test/tracks-v1a1/mono.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"MTV Beats",
    "link":"https://d1g8wgjurz8via.cloudfront.net/bpk-tv/Mtvbeats/default/mtvbeats.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"CARTOON NETWORK HD",
    "link":"https://amg01448-samsungin-cartoonnw-samsungin-1y8kz.amagi.tv/playlist/amg01448-samsungin-cartoonnw-samsungin/cb553d1e786c648b93d43d63d5ef41a4d3246ad3032e90703dff06c231901d468ca2f9d3f537b63619d714af3f5e2f0e0433db18dd6511b6802eea0e6d287f09cfcceb2ada861317b3c60e383ebb281700ab0941d8380220dcec5759d438b0340446b00a230f338fbe51aa7e55978808821d57b189e5a4fd04706ded294fdfd20ffda8bd0c118d2ff9932372a75e26c7199604e6368ff19702cf69b66cc1168caa08baf212e7868bfa2a50c24d1bb2ccf90b774fb3833797c9936876b879294d1f6fb8c9cbfc4a7292524159fafadfbe37b04a80d165c94c3eb5158014a53e8e79a500a3a11ff3e4fbfe4c452babcd5f590aa5e1a98ba87a62f337b5f39bbd091c93944c2a5fa8718f3a353705d56f1c4b0b9a90d86276/82/640x360_1284800/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Discovery Kids",
    "link":"https://dplus.gammacdn.workers.dev/videos/113.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Disney",
    "link":"http://tv.mototvlive.net:8880/salman/salman/1774",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"HUNGAMA KIDS",
    "link":"http://tv.mototvlive.net:8880/salman/salman/4240",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"GUBBARE",
    "link":"https://epiconvh.s.llnwi.net/gubbare/master.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"PBS KIDS",
    "link":"https://2-fss-2.streamhoster.com/pl_140/amlst:200914-1298290/playlist.m3u8?DVR",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Zoo Moo",
    "link":"https://amg01553-blueantmediaasi-zoomoonz-samsungnz-rdufn.amagi.tv/playlist/amg01553-blueantmediaasi-zoomoonz-samsungnz/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Pogo",
    "link":"https://amg01448-samsungin-pogo-samsungin-dzccl.amagi.tv/playlist/amg01448-samsungin-pogo-samsungin/cb543d1e786c648e93d43660cef342a6f9481fde1d6988693eb5518975d10725dce2b48be65b9e3608dd4087351a6c535677ab66ad0311badc6ac8136b650705dad8ee2ebecc4072eb9c102f29b4641d57ee166ea8412e5e95a916018e38f55e0010e30627161185af06f0234dc4820a957f378dadd468277c5e5a8f2002b7f902f6ef820c13892ef8ae194b923146e19056cdd74ae986dd0ec85ed723a4468093f1de860d8b86c231b401b4660d0d7b2bcf867fca9c07f6b0f4683d8f3f29560e6ae2ac9eff4732f4292930e3defb8f5adb3ce3a80caf7d6dc76af44e8023c46aba1998ef4fada8c9b3282b2285f46b5e0981c88597a14559d467ffb1a7de7c6c89f7661b2da83c8251415f91f9d85a80ca11e4de49e3af592e11e48c1fe3f7d582eba3c34e9231b8aa9ef326766f512327b27292ae70e907b70cc05b8708262f6689d83fe687d7593c634b839356a67c71dbfab8f3148aa6a81a7f7bfb69d8216526ac662d144d4c88c8093cc3efd9d21544e9b2db04d00b8e0cbfcdfaf60f3afafacf43f46ed56d6bb8e82fa67735550eb2bd7911150c35fce7681828228364ead7d8ee7e0d40bda596bef07c1b28793a004cbbf0e839dbafd0391113f656244b7d0458c35781278c56094805e12afe804534890f2a28a6803a5e5163df88928995d9c741fa2e819fb369616d093ae47d54723b939b825bf4344e3e495c860e764af2520915a4c69f97f4ea09ef9260b8376b1011a7a1453b4e38155b039a9f65de2c84ab14b894c755b688bd3d66aa7c855052f2fdd36ef1e184877f079fa4521305c68b3fa4846ab4c4b18cda62006f871f847ab262/18/1280x720_3000800/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Baby First",
    "link":"https://streams.sofast.tv/v1/master/611d79b11b77e2f571934fd80ca1413453772ac7/anyaott4_sofast/3d21d9ee-e2b7-49f7-93da-7d459f89e083_0_HLS/manifest.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"SPACETOON",
    "link":"https://streams.spacetoon.com/live/stchannel/smil:livesmil.smil/chunklist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"DESI CHANNEL",
    "link":"https://live.wmncdn.net/desichannel/7e2dd0aed46b70a5c77f4affdb702e4b.sdp/chunks.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"NAT GEO Wild",
    "link":"https://nat-geo-wild.mssarena71.workers.dev/stream/NatGeoWild/master.m3u8 ",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Wild Earth(BD)",
    "link":"https://wildearth-roku.amagi.tv/masterR720P.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"EATHER SPY",
    "link":"https://jukin-weatherspy-2-in.samsung.wurl.tv/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Outdoor Channel",
    "link":"https://cdn-apse1-prod.tsv2.amagi.tv/linear/amg00718-outdoorchannela-outdoortvnz-samsungnz/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"CricLife 1",
    "link":"http://xtv.ooo:8080/shahz18/18usman/371469",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"CricLife 2",
    "link":"http://xtv.ooo:8080/shahz18/18usman/371470",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"CricLife 3",
    "link":"http://xtv.ooo:8080/shahz18/18usman/371471",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"DUBAI 2",
    "link":"http://dmitwlvvll.cdn.mangomolo.com/dubaisportshd/smil:dubaisportshd.smil/chunklist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"DUBAI 3",
    "link":"http://dmitwlvvll.cdn.mangomolo.com/dubaisportshd5/smil:dubaisportshd5.smil/index.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Red Bull TV",
    "link":"https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_3360.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Football 2",
    "link":"https://rmtv.akamaized.net/hls/live/2043154/rmtv-en-web/bitrate_3.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Tennis Channel [UK]",
    "link":"https://tennischannel-int-samsunguk.amagi.tv/playlist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"Ziggo Sport Tennis ",
    "link":"http://carmeltv.live:80/EXCHANGEukmed/QHZ5pjF7UdKx/53711.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"FIFA+",
    "link":"https://i.mjh.nz/SamsungTVPlus/ITBD1000002HF.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"FIFA+",
    "link":"https://i.mjh.nz/SamsungTVPlus/ESBC2700009B4.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"FIFA+",
    "link":"https://i.mjh.nz/SamsungTVPlus/ATBA3300007PT.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"MUTV",
    "link":"https://bcovlive-a.akamaihd.net/r2d2c4ca5bf57456fb1d16255c1a535c8/eu-west-1/eu-west-1/6058004203001/profile_2/chunklist.m3u8",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"",
    "referrer":"",
    "userAgent":"",
    "cookie":""
  },
  {"name":"S1",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium501/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S2",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium502/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S3",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium503/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S4",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium504/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S5",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium505/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S6",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium506/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S7",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium507/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
   {"name":"S1",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium501/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S2",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium502/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S3",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium503/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S4",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium504/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S5",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium505/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S6",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium506/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S7",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium507/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
   {"name":"S8",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium508/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S9",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium509/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S10",
    "link":"https://ddh2.onlinehdhls.ru/ddh2/premium510/tracks-v1a1/mono.m3u8%7creferer=https://ddh2.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S11",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium511/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S12",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium512/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S13",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium513/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S14",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium515/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  }, {"name":"S15",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium516/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S16",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium517/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S17",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium518/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S18",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium519/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  },
  {"name":"S19",
    "link":"https://ddy3.onlinehdhls.ru/ddy3/premium520/tracks-v1a1/mono.m3u8%7creferer=https://ddy3.onlinehdhls.ru/",
    "logo":"https://i.postimg.cc/KYzJWn44/vip.png",
    "origin":"https://claplivehdplay.ru",
    "referrer":"https://claplivehdplay.ru/",
    "userAgent":"Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Mobile Safari/537.36",
    "cookie":""
  }

]
