<?php


// here 2 function each function for lang , it's easy and all langs in one page.



function title($action , $english , $arabic){
    if($action =="english"){
        return $english;
    }else{
        return $arabic; 
    }
}


function arabic ($word){
   static $words = array(

            "lang"=>"العربية",
            "home"=>"الرئيسية",
            "about"=>"من نحن",
            "services"=>"خدمات",
            "contact"=>"تواصل معنا",
            "about1"=>"
            يتميز المكتب بمجموعة متعددة من المحامين و المستشارين مما يوفر للقضايا 
            و الاستشارات الدقة والسرعة و الجودة المطلوبة .",
            "about2"=>"تميز مكتبنا بخبرة كبيرة فى انجاز المعاملات فى جميع الإدارات الحكومية 
            و الجهات الرسمية مما يتيح لنا تحقيق مصالح موكلينا بأسرع وقت.",
            "address"=>"العنوان",
            "phone" => "الهاتف",
            "email" => "ايميل",
            "quick" => "روابط سريعة",
            "contact-info" =>"معلومات الاتصال",
            "sub-footer" =>"يتميز المكتب بمجموعة متعددة من المحامين و المستشارين مما يوفر للقضايا
             و الاستشارات الدقة والسرعة و الجودة المطلوبة .",
             "newsletter"=>"النشرة البريدية",
             "entermail" =>"ادخل بريدك هنا",
             "copyright" => " جميع الحقوق محفوظة لمكتب العجيل للمحاماة والاستشارات القانونية",
             "design" => "تصميم وبرمجة",
             "msg" => " ابقى على تواصل",
             "msg-name" =>"الإسم",
             "msg-phone" =>"الهاتف",
             "msg-mail" =>"البريد",
             "msg-subject" =>"الموضوع",
             "msg-body" =>"الرسالة",
             "submit" =>"ارسال",
             "call-us" =>"اتصل بنا",
             "mail-us" =>"راسلنا",

    
    );
    return $words[$word];
}



function english ($word){
    static  $words = array(

            "lang"=>"english",
            "home"=>"HOME",
            "about"=>"ABOUT",
            "services"=>"SERVICES",
            "contact"=>"CONTACT",
            "about1" =>"
            Our Firm consist of multiple lawyers and consultant the matter which provides accuracy ,
             speed and quality.",
             "about2" => "Vast experience in execution all Gov't , semi Government agencies so as to
              achieve and secure our client interest as soon as possible.",
              "address"=>"Address",
              "phone" => "Phone",
              "email" => "E-mail",
              "quick" => "Quick Links",
              "contact-info" =>"Contact Info",
              "sub-footer" =>"Our Firm consist of multiple lawyers and consultant
               the matter which provides accuracy , speed and quality.",
               "newsletter" => "Newsletter",
               "entermail" => "Enter Your email here",
               "copyright" => "
               Copyright, 2019 Alojeel For Lawyers and Consultants",
               "design" => "Design and programming",
               "msg" => "Get in Touch",
               "msg-name" =>"Name",
               "msg-phone" =>"Phone",
               "msg-mail" =>"E-mail",
               "subject" =>"Subject",
               "msg-body" =>"Message",
               "submit" =>"Submit",
               "call-us" =>"CALL US",
               "mail-us" =>"MAIL US"
              


 
        );

    return $words[$word];
}


/*




*/


?>