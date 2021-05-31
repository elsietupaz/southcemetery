











<?php include 'db.php'; 







$query="SELECT * from tblcontent";



$result= mysqli_query($conn,$query);



while($row = mysqli_fetch_assoc($result))



{







    $title = $row['title'];



    $navtitle = $row['navtitle'];



   



    }



?>







<html lang="en">



<head>







<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<link rel="shortcut icon" href="icon.ico" />







<link rel="dns-prefetch" href="https://fonts.gstatic.com">



<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">







<link rel="stylesheet" href="css/styles.css">







<link rel="icon" href="Favicon.png">















<title><?php echo $title; ?></title>



</head>



<body>







<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">



<div class="container">



    <a class="navbar-brand" href="login.php"><?php echo $navtitle; ?></a>



</div>



</nav>



<script>



window.setTimeout(function() {



$(".alert").fadeTo(500, 0).slideUp(500, function(){



    $(this).remove(); 



});



}, 4000);







</script>







<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>







<?php if(isset($errmsg)){







echo $errmsg;



}







?>











<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<div class="modal fade" tabindex="-1" role="dialog" id="modalTC">



<div class="modal-dialog modal-dialog-scrollable" role="document">



    <div class="modal-content">



      <div class="modal-header">



        <h4 class="modal-title">TERMS AND CONDITION</h4>



      </div>



      <div class="modal-body">



<p>Last updated: 2020-10-05</p>



<p>1. <b>Introduction</b></p>



<p>Welcome to <b>Manila South Cemetery</b> (“Company”, “we”, “our”, “us”)!</p>



<p>These Terms of Service (“Terms”, “Terms of Service”) govern your use of our website located at <b>manilasouthcemetery.com</b> (together or individually “Service”) operated by <b>Manila South Cemetery</b>.</p>



<p>Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard and disclose information that results from your use of our web pages.</p>



<p>Your agreement with us includes these Terms and our Privacy Policy (“Agreements”). You acknowledge that you have read and understood Agreements, and agree to be bound of them.</p>



<p>If you do not agree with (or cannot comply with) Agreements, then you may not use the Service, but please let us know by emailing at <b>manilasouthcemetery1920@gmail.com</b> so we can try to find a solution. These Terms apply to all visitors, users and others who wish to access or use Service.</p>



<p>2. <b>Communications</b></p>



<p>By using our Service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or by emailing at manilasouthcemetery1920@gmail.com.</p>



<p>3. <b>Purchases</b></p><p>If you wish to purchase any product or service made available through Service (“Purchase”), you may be asked to supply certain information relevant to your Purchase including but not limited to, your credit or debit card number, the expiration date of your card, your billing address, and your shipping information.</p><p>You represent and warrant that: (i) you have the legal right to use any card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete.</p><p>We may employ the use of third party services for the purpose of facilitating payment and the completion of Purchases. By submitting your information, you grant us the right to provide the information to these third parties subject to our Privacy Policy.</p><p>We reserve the right to refuse or cancel your order at any time for reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.</p><p>We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal transaction is suspected.</p>











<p>4. <b>Refunds</b></p><p>We issue refunds for Contracts within <b>30 days</b> of the original purchase of the Contract.</p>



<p>5. <b>Content</b></p><p>Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material (“Content”). You are responsible for Content that you post on or through Service, including its legality, reliability, and appropriateness.</p><p>By posting Content on or through Service, You represent and warrant that: (i) Content is yours (you own it) and/or you have the right to use it and the right to grant us the rights and license as provided in these Terms, and (ii) that the posting of your Content on or through Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person or entity. We reserve the right to terminate the account of anyone found to be infringing on a copyright.</p><p>You retain any and all of your rights to any Content you submit, post or display on or through Service and you are responsible for protecting those rights. We take no responsibility and assume no liability for Content you or any third party posts on or through Service. However, by posting Content using Service you grant us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through Service. You agree that this license includes the right for us to make your Content available to other users of Service, who may also use your Content subject to these Terms.</p><p>Manila South Cemetery has the right but not the obligation to monitor and edit all Content provided by users.</p><p>In addition, Content found on or through this Service are the property of Manila South Cemetery or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.</p>



<p>6. <b>Prohibited Uses</b></p>



<p>You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service:</p>



<p>0.1. In any way that violates any applicable national or international law or regulation.</p>



<p>0.2. For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content or otherwise.</p>



<p>0.3. To transmit, or procure the sending of, any advertising or promotional material, including any “junk mail”, “chain letter,” “spam,” or any other similar solicitation.</p>



<p>0.4. To impersonate or attempt to impersonate Company, a Company employee, another user, or any other person or entity.</p>



<p>0.5. In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful purpose or activity.</p>



<p>0.6. To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of Service, or which, as determined by us, may harm or offend Company or users of Service or expose them to liability.</p>



<p>Additionally, you agree not to:</p>



<p>0.1. Use Service in any manner that could disable, overburden, damage, or impair Service or interfere with any other party’s use of Service, including their ability to engage in real time activities through Service.</p>



<p>0.2. Use any robot, spider, or other automatic device, process, or means to access Service for any purpose, including monitoring or copying any of the material on Service.</p>



<p>0.3. Use any manual process to monitor or copy any of the material on Service or for any other unauthorized purpose without our prior written consent.</p>



<p>0.4. Use any device, software, or routine that interferes with the proper working of Service.</p>



<p>0.5. Introduce any viruses, trojan horses, worms, logic bombs, or other material which is malicious or technologically harmful.</p>



<p>0.6. Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of Service, the server on which Service is stored, or any server, computer, or database connected to Service.</p>



<p>0.7. Attack Service via a denial-of-service attack or a distributed denial-of-service attack.</p>



<p>0.8. Take any action that may damage or falsify Company rating.</p>



<p>0.9. Otherwise attempt to interfere with the proper working of Service.</p>



<p>7. <b>Analytics</b></p>



<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>







<p>8. <b>Accounts</b></p><p>When you create an account with us, the information you provide us is accurate, complete, and current at all times. Inaccurate, incomplete, or obsolete information may result in the immediate termination of your account on Service.</p><p>You are responsible for maintaining the confidentiality of your account and password, including but not limited to the restriction of access to your computer and/or account. You agree to accept responsibility for any and all activities or actions that occur under your account and/or password, whether your password is with our Service or a third-party service. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p><p>You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than you, without appropriate authorization. You may not use as a username any name that is offensive, vulgar or obscene.</p><p>We reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in our sole discretion.</p>



<p>9. <b>Intellectual Property</b></p>



<p>Service and its original content (excluding Content provided by users), features and functionality are and will remain the exclusive property of Manila South Cemetery and its licensors. Service is protected by copyright, trademark, and other laws of  and foreign countries. Our trademarks may not be used in connection with any product or service without the prior written consent of Manila South Cemetery.</p>



<p>10. <b>Copyright Policy</b></p>



<p>We respect the intellectual property rights of others. It is our policy to respond to any claim that Content posted on Service infringes on the copyright or other intellectual property rights (“Infringement”) of any person or entity.</p>



<p>If you are a copyright owner, or authorized on behalf of one, and you believe that the copyrighted work has been copied in a way that constitutes copyright infringement, please submit your claim via email to manilasouthcemetery1920@gmail.com, with the subject line: “Copyright Infringement” and include in your claim a detailed description of the alleged Infringement as detailed below, under “DMCA Notice and Procedure for Copyright Infringement Claims”</p>



<p>You may be held accountable for damages (including costs and attorneys’ fees) for misrepresentation or bad-faith claims on the infringement of any Content found on and/or through Service on your copyright.</p>



<p>11. <b>DMCA Notice and Procedure for Copyright Infringement Claims</b></p>



<p>You may submit a notification pursuant to the Digital Millennium Copyright Act (DMCA) by providing our Copyright Agent with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):</p>



<p>0.1. an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright’s interest;</p>



<p>0.2. a description of the copyrighted work that you claim has been infringed, including the URL (i.e., web page address) of the location where the copyrighted work exists or a copy of the copyrighted work;</p>



<p>0.3. identification of the URL or other specific location on Service where the material that you claim is infringing is located;</p>



<p>0.4. your address, telephone number, and email address;</p>



<p>0.5. a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law;</p>



<p>0.6. a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner’s behalf.</p>



<p>You can contact our Copyright Agent via email at manilasouthcemetery1920@gmail.com.</p>



<p>12. <b>Error Reporting and Feedback</b></p>



<p>You may provide us either directly at manilasouthcemetery1920@gmail.com or via third party sites and tools with information and feedback concerning errors, suggestions for improvements, ideas, problems, complaints, and other matters related to our Service (“Feedback”). You acknowledge and agree that: (i) you shall not retain, acquire or assert any intellectual property right or other right, title or interest in or to the Feedback; (ii) Company may have development ideas similar to the Feedback; (iii) Feedback does not contain confidential information or proprietary information from you or any third party; and (iv) Company is not under any obligation of confidentiality with respect to the Feedback. In the event the transfer of the ownership to the Feedback is not possible due to applicable mandatory laws, you grant Company and its affiliates an exclusive, transferable, irrevocable, free-of-charge, sub-licensable, unlimited and perpetual right to use (including copy, modify, create derivative works, publish, distribute and commercialize) Feedback in any manner and for any purpose.</p>



<p>13. <b>Links To Other Web Sites</b></p>



<p>Our Service may contain links to third party web sites or services that are not owned or controlled by Manila South Cemetery.</p>



<p>Manila South Cemetery has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.</p>







<p>YOU ACKNOWLEDGE AND AGREE THAT COMPANY SHALL NOT BE RESPONSIBLE OR LIABLE, DIRECTLY OR INDIRECTLY, FOR ANY DAMAGE OR LOSS CAUSED OR ALLEGED TO BE CAUSED BY OR IN CONNECTION WITH USE OF OR RELIANCE ON ANY SUCH CONTENT, GOODS OR SERVICES AVAILABLE ON OR THROUGH ANY SUCH THIRD PARTY WEB SITES OR SERVICES.</p>



<p>WE STRONGLY ADVISE YOU TO READ THE TERMS OF SERVICE AND PRIVACY POLICIES OF ANY THIRD PARTY WEB SITES OR SERVICES THAT YOU VISIT.</p>



<p>14. <b>Disclaimer Of Warranty</b></p>



<p>THESE SERVICES ARE PROVIDED BY COMPANY ON AN “AS IS” AND “AS AVAILABLE” BASIS. COMPANY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THEIR SERVICES, OR THE INFORMATION, CONTENT OR MATERIALS INCLUDED THEREIN. YOU EXPRESSLY AGREE THAT YOUR USE OF THESE SERVICES, THEIR CONTENT, AND ANY SERVICES OR ITEMS OBTAINED FROM US IS AT YOUR SOLE RISK.</p>



<p>NEITHER COMPANY NOR ANY PERSON ASSOCIATED WITH COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY, OR AVAILABILITY OF THE SERVICES. WITHOUT LIMITING THE FOREGOING, NEITHER COMPANY NOR ANYONE ASSOCIATED WITH COMPANY REPRESENTS OR WARRANTS THAT THE SERVICES, THEIR CONTENT, OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL BE ACCURATE, RELIABLE, ERROR-FREE, OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT THE SERVICES OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE SERVICES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.</p>



<p>COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY, OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR PARTICULAR PURPOSE.</p>



<p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>



<p>15. <b>Limitation Of Liability</b></p>



<p>EXCEPT AS PROHIBITED BY LAW, YOU WILL HOLD US AND OUR OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS HARMLESS FOR ANY INDIRECT, PUNITIVE, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGE, HOWEVER IT ARISES (INCLUDING ATTORNEYS’ FEES AND ALL RELATED COSTS AND EXPENSES OF LITIGATION AND ARBITRATION, OR AT TRIAL OR ON APPEAL, IF ANY, WHETHER OR NOT LITIGATION OR ARBITRATION IS INSTITUTED), WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE, OR OTHER TORTIOUS ACTION, OR ARISING OUT OF OR IN CONNECTION WITH THIS AGREEMENT, INCLUDING WITHOUT LIMITATION ANY CLAIM FOR PERSONAL INJURY OR PROPERTY DAMAGE, ARISING FROM THIS AGREEMENT AND ANY VIOLATION BY YOU OF ANY FEDERAL, STATE, OR LOCAL LAWS, STATUTES, RULES, OR REGULATIONS, EVEN IF COMPANY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. EXCEPT AS PROHIBITED BY LAW, IF THERE IS LIABILITY FOUND ON THE PART OF COMPANY, IT WILL BE LIMITED TO THE AMOUNT PAID FOR THE PRODUCTS AND/OR SERVICES, AND UNDER NO CIRCUMSTANCES WILL THERE BE CONSEQUENTIAL OR PUNITIVE DAMAGES. SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF PUNITIVE, INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE PRIOR LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU.</p>



<p>16. <b>Termination</b></p>



<p>We may terminate or suspend your account and bar access to Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of Terms.</p>



<p>If you wish to terminate your account, you may simply discontinue using Service.</p>



<p>All provisions of Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>



<p>17. <b>Governing Law</b></p>



<p>These Terms shall be governed and construed in accordance with the laws of Philippines, which governing law applies to agreement without regard to its conflict of law provisions.</p>



<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service and supersede and replace any prior agreements we might have had between us regarding Service.</p>



<p>18. <b>Changes To Service</b></p>



<p>We reserve the right to withdraw or amend our Service, and any service or material we provide via Service, in our sole discretion without notice. We will not be liable if for any reason all or any part of Service is unavailable at any time or for any period. From time to time, we may restrict access to some parts of Service, or the entire Service, to users, including registered users.</p>



<p>19. <b>Amendments To Terms</b></p>



<p>We may amend Terms at any time by posting the amended terms on this site. It is your responsibility to review these Terms periodically.</p>



<p>Your continued use of the Platform following the posting of revised Terms means that you accept and agree to the changes. You are expected to check this page frequently so you are aware of any changes, as they are binding on you.</p>



<p>By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use Service.</p>



<p>20. <b>Waiver And Severability</b></p>



<p>No waiver by Company of any term or condition set forth in Terms shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of Company to assert a right or provision under Terms shall not constitute a waiver of such right or provision.</p>



<p>If any provision of Terms is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of Terms will continue in full force and effect.</p>



<p>21. <b>Acknowledgement</b></p>



<p>BY USING SERVICE OR OTHER SERVICES PROVIDED BY US, YOU ACKNOWLEDGE THAT YOU HAVE READ THESE TERMS OF SERVICE AND AGREE TO BE BOUND BY THEM.</p>



<p>22. <b>Contact Us</b></p>



<p>Please send your feedback, comments, requests for technical support by email: <b>manilasouthcemetery1920@gmail.com</b>.</p>











      </div>



      <div class="modal-footer">



      <p> <input type="checkbox" id="termsChkbx " onchange="isChecked(this, 'sub1')" />



     I have read and agree to the terms and conditions</p>



        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" id="sub1" disabled="disabled" >Accept</button>



      </div>



    </div><!-- /.modal-content -->



  </div><!-- /.modal-dialog -->



</div><!-- /.modal -->







<script>



function isChecked(checkbox, sub1) {



    document.getElementById(sub1).disabled = !checkbox.checked;



}



</script>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<div class="modal fade" tabindex="-1" role="dialog" id="modalDP">



<div class="modal-dialog modal-dialog-scrollable" role="document">



    <div class="modal-content">



      <div class="modal-header">



        <h4 class="modal-title">PRIVACY POLICY</h4>



      </div>



      <div class="modal-body">



<p>Effective date: 2020-10-05</p>



<p>1. <b>Introduction</b></p>



<p>Welcome to <b> Manila South Cemetery</b>.</p>



<p><b>Manila South Cemetery</b> (“us”, “we”, or “our”) operates <b>manilasouthcemetery.com</b> (hereinafter referred to as <b>“Service”</b>).</p>



<p>Our Privacy Policy governs your visit to <b>manilasouthcemetery.com</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.</p>



<p>We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>



<p>Our Terms and Conditions (<b>“Terms”</b>) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (<b>“agreement”</b>).</p>



<p>2. <b>Definitions</b></p>



<p><b>SERVICE</b> means the manilasouthcemetery.com website operated by Manila South Cemetery.</p>



<p><b>PERSONAL DATA</b> means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).</p>



<p><b>USAGE DATA</b> is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).</p>



<p><b>COOKIES</b> are small files stored on your device (computer or mobile device).</p>



<p><b>DATA CONTROLLER</b> means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.</p>



<p><b>DATA PROCESSORS (OR SERVICE PROVIDERS)</b> means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.</p> <p><b>DATA SUBJECT</b> is any living individual who is the subject of Personal Data.</p>



<p><b>THE USER</b> is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.</p>



<p>3. <b>Information Collection and Use</b></p>



<p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>



<p>4. <b>Types of Data Collected</b></p>



<p><b>Personal Data</b></p>



<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (<b>“Personal Data”</b>). Personally identifiable information may include, but is not limited to:</p>



<p>0.1. Email address</p>



<p>0.2. First name and last name</p>



<p>0.3. Phone number</p>



<p>0.4. Address</p>



<p>0.5. Cookies and Usage Data</p>



<p>We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link.</p>



<p><b>Usage Data</b></p>



<p>We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device (<b>“Usage Data”</b>).</p>



<p>This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>



<p>When you access Service with a device, this Usage Data may include information such as the type of device you use, your device unique ID, the IP address of your device, your device operating system, the type of Internet browser you use, unique device identifiers and other diagnostic data.</p>



<p><b>Location Data</b></p><p>We may use and store information about your location if you give us permission to do so (<b>“Location Data”</b>). We use this data to provide features of our Service, to improve and customize our Service.</p><p>You can enable or disable location services when you use our Service at any time by way of your device settings.</p>



<p><b>Tracking Cookies Data</b></p>



<p>We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.</p>



<p>Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service.</p>



<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>



<p>Examples of Cookies we use:</p>



<p>0.1. <b>Session Cookies:</b> We use Session Cookies to operate our Service.</p>



<p>0.2. <b>Preference Cookies:</b> We use Preference Cookies to remember your preferences and various settings.</p>



<p>0.3. <b>Security Cookies:</b> We use Security Cookies for security purposes.</p>







<p><b>Other Data</b></p>



<p>While using our Service, we may also collect the following information: lastname, firstname, middlename, email, mobile number, username, password, location and other data.</p>



<p>5. <b>Use of Data</b></p>



<p>Manila South Cemetery uses the collected data for various purposes:</p>



<p>0.1. to provide and maintain our Service;</p>



<p>0.2. to notify you about changes to our Service;</p>



<p>0.3. to allow you to participate in interactive features of our Service when you choose to do so;</p>



<p>0.4. to provide customer support;</p>



<p>0.5. to gather analysis or valuable information so that we can improve our Service;</p>



<p>0.6. to monitor the usage of our Service;</p>



<p>0.7. to detect, prevent and address technical issues;</p>



<p>0.8. to fulfil any other purpose for which you provide it;</p>



<p>0.9. to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;</p>



<p>0.10. to provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;</p>



<p>0.11. to provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;</p>



<p>0.12. in any other way we may describe when you provide the information;</p>



<p>0.13. for any other purpose with your consent.</p>



<p>6. <b>Retention of Data</b></p>



<p>We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>



<p>We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.</p>



<p>7. <b>Transfer of Data</b></p>



<p>Your information, including Personal Data, may be transferred to – and maintained on – computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>



<p>If you are located outside Philippines and choose to provide information to us, please note that we transfer the data, including Personal Data, to Philippines and process it there.</p>



<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>



<p>Manila South Cemetery will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.</p>



<p>8. <b>Disclosure of Data</b></p>



<p>We may disclose personal information that we collect, or you provide:</p>



<p>0.1. <b>Disclosure for Law Enforcement.</b></p><p>Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities.</p><p>0.2. <b>Business Transaction.</b></p><p>If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.</p><p>0.3. <b>Other cases. We may disclose your information also:</b></p><p>0.3.1. to our subsidiaries and affiliates;</p><p>0.3.2. to contractors, service providers, and other third parties we use to support our business;</p><p>0.3.3. to fulfill the purpose for which you provide it;</p><p>0.3.4. for the purpose of including your company’s logo on our website;</p><p>0.3.5. for any other purpose disclosed by us when you provide the information;</p><p>0.3.6. with your consent in any other cases;</p><p>0.3.7. if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others.</p>



<p>9. <b>Security of Data</b></p>



<p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>



<p><b>Your Data Protection Rights Under General Data Protection Regulation (GDPR)</b></p>



<p>If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR.</p>



<p>We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.</p>



<p>If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at manilasouthcemetery1920@gmail.com</p>



<p>In certain circumstances, you have the following data protection rights:</p>



<p>0.1. the right to access, update or to delete the information we have on you;</p>



<p>0.2. the right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete;</p>



<p>0.3. the right to object. You have the right to object to our processing of your Personal Data;</p>



<p>0.4. the right of restriction. You have the right to request that we restrict the processing of your personal information;</p>



<p>0.5. the right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format;</p>



<p>0.6. the right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information;</p>



<p>Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.</p>



<p>You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA).</p>



<p><b>11. Your Data Protection Rights under the Republic Act 10173 – Data Privacy Act of 2012</b></p>



<p>It is the policy of the State to protect the fundamental human right of privacy, of communication while ensuring free flow of information to promote innovation and growth. The State recognizes the vital role of information and communications technology in nation-building and its inherent obligation to ensure that personal information in information and communications systems in the government and in the private sector are secured and protected.</p>



<p><b>12. Your Data Protection Rights under the Republic Act No. 7394</b></p>



<p>If you are a Philippine resident, you are entitled to learn what data we collect about you, ask to delete your data and not to sell (share) it. To exercise your data protection rights, you can make certain requests and ask us:</p>



<p><b>0.1. What personal information we have about you. If you make this request, we will return to you:</b></p>



0.0.1. The categories of personal information we have collected about you.</p>



0.0.2. The categories of sources from which we collect your personal information.</p>



0.0.3. The business or commercial purpose for collecting or selling your personal information.</p>



0.0.4. The categories of third parties with whom we share personal information.</p>



0.0.5. The specific pieces of personal information we have collected about you.</p>



0.0.6. A list of categories of personal information that we have sold, along with the category of any other company we sold it to. If we have not sold your personal information, we will inform you of that fact.</p>



0.0.7. A list of categories of personal information that we have disclosed for a business purpose, along with the category of any other company we shared it with.</p>



Please note, you are entitled to ask us to provide you with this information up to two times in a rolling twelve-month period. When you make this request, the information provided may be limited to the personal information we collected about you in the previous 12 months.</p>



<p><b>0.2. To delete your personal information. If you make this request, we will delete the personal information we hold about you as of the date of your request from our records and direct any service providers to do the same. In some cases, deletion may be accomplished through de-identification of the information. If you choose to delete your personal information, you may not be able to use certain functions that require your personal information to operate.</b></p>



<p><b>0.3. To stop selling your personal information. We don’t sell or rent your personal information to any third parties for any purpose. We do not sell your personal information for monetary consideration. However, under some circumstances, a transfer of personal information to a third party, or within our family of companies, without monetary consideration may be considered a “sale” under Philippine law. You are the only owner of your Personal Data and can request disclosure or deletion at any time.</b></p>







<p>Please note, if you ask us to delete or stop selling your data, it may impact your experience with us, and you may not be able to participate in certain programs or membership services which require the usage of your personal information to function. But in no circumstances, we will discriminate against you for exercising your rights.</p>



<p>To exercise your Philippine data protection rights described above, please send your request(s) by email: <b>manilasouthcemetery@gmail.com</b></p>



Your data protection rights, described above, are covered by the R.A. No. 7394, short for The Consumer Act of  the Philippines. To find out more, visit the official Philippine Legislative Information website. The R.A. No. 7394 took effect on 01/01/2020.







<p>13. <b>Service Providers</b></p>



<p>We may employ third party companies and individuals to facilitate our Service (<b>“Service Providers”</b>), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.</p>



<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>



<p>14. <b>Analytics</b></p>



<p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>



<p>15. <b>CI/CD tools</b></p>



<p>We may use third-party Service Providers to automate the development process of our Service.</p>



<p>16. <b>Behavioral Remarketing</b></p>



<p>We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.</p>



<p>17. <b>Payments</b></p><p>We may provide paid products and/or services within Service. In that case, we use third-party services for payment processing (e.g. payment processors).</p><p>We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information.</p>



<p>18. <b>Links to Other Sites</b></p>



<p>Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>



<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>



<p>19. <b>Contact Us</b></p>



<p>If you have any questions about this Privacy Policy, please contact us by email: <b>manilasouthcemetery1920@gmail.com</b>.</p>











      </div>



      <div class="modal-footer">



      <p> <input type="checkbox" id="termsChkbx1 " onchange="isChecked(this, 'sub2')" />



     I have read and agree to the privacy policy</p>



        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" id="sub2" disabled="disabled" >Accept</button>



      </div>



    </div><!-- /.modal-content -->



  </div><!-- /.modal-dialog -->



</div><!-- /.modal -->







<script>



function isChecked(checkbox, sub2) {



    document.getElementById(sub2).disabled = !checkbox.checked;



}



</script>











<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<?php



   require_once "db.php";



   



   if (isset($_POST['signup'])) {



    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);



    $dob = strtotime($_POST["dob"]);



    $dob = date('Y-m-d H:i:s', $dob);



    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);



    $email = mysqli_real_escape_string($conn, $_POST['email']);



     $username = mysqli_real_escape_string($conn, $_POST['username']);



    $password = mysqli_real_escape_string($conn, $_POST['password']);



    $hashed_password = password_hash($password, PASSWORD_DEFAULT);



    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);



    $hashed_cpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);



    $currdate = date('Y-m-d');



    $date= DateTime::createFromFormat('M-d-Y', $currdate);



  $balance= 0;



    



    if($password != $confirmpassword) {



        $confirmpassword_error = '<div class="alert alert-danger">Password and Confirm Password doesnt match!</div>';



    }







    $sql1 = "SELECT username FROM tblregistration where username='".$username."'";



    $result = mysqli_query($conn, $sql1);



    



    if (mysqli_num_rows($result) > 0) {



        $errmsg= '<div class="alert alert-danger">Username already exists!</div>';



    }



  



        else if(mysqli_query($conn, "INSERT INTO tblregistration(fullname, birthdate, email, mobile, username, password, cpassword, date_register) VALUES('" . $fullname . "', '" . $dob . "', '" . $email . "', '" . $mobile . "', '" . $username . "', '" . $hashed_password . "', '" . $hashed_cpassword . "', NOW())")) {



            ?>



            <script>



            swal({



              title: "Success!",



              text: "Registration submitted successfully!",



              icon: "success",



              button: "Close!"

            }).then(function() {
    window.location = "login.php";



            });



            </script>



                    <?php



        }



       



        else {



             echo "Error: " . $sql . "" . mysqli_error($conn);



        }



    }



    mysqli_close($conn);







    



?>







<script>



$(document).ready(function() {



    // show the alert



    setTimeout(function() {



        $(".alert").alert('close');



    }, 2000);



});



</script>















<main class="login-form">



<div class="cotainer">



    <div class="row justify-content-center">



        <div class="col-md-8">



            <div class="card">



           



                <div class="card-header">Registration</div>



                <div class="card-body">



                <p>Please fill in the form below. </p>



                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">



                        <div class="form-group row">



                            <label for="fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>



                            <div class="col-md-6">



                                <input onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 44))' type="text" id="fullname" class="form-control" name="fullname" placeholder="Given Name, Family Name" required autofocus>



                                



                            </div>



                        </div>



                        <div class="form-group row">



                            <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>



                            <div class="col-md-6">



                                <input type="date" id="dob" class="form-control" name="dob" required>



                            



                            </div>



                            </div>







                      





                        <div class="form-group row">



                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>



                            <div class="col-md-6">



                                <input type="email" id="email" class="form-control" name="email" required>



                               



                            </div>



                        </div>



                 



                         <div class="form-group row">



                            <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile No.</label>



                            <div class="col-md-6">



                                <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="mobile" class="form-control" name="mobile" maxlength="11"  minlenght="11" required >



                            </div>



                        </div>



                      







                        <div class="form-group row">



                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>



                            <div class="col-md-6">



                                <input type="text" id="username" class="form-control" name="username" minlength="5" required >



                                <span class="text-danger"><?php if (isset($errmsg)) echo $errmsg; ?></span>



                            </div>



                        </div>







                        <div class="form-group row">



                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>



                            <div class="col-md-6">



                                <input type="password" id="password" class="form-control" name="password" minlength="6" required>



                             <input type="checkbox" onclick="myFunction()"> Show the Password







                            </div>



                        </div>







                             <div class="form-group row">



                            <label for="cpassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>



                            <div class="col-md-6">



                                <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" minlength="6" required>



                              <input type="checkbox" onclick="myFunction1()"> Show the Password



                                   <span class="text-danger"><?php if (isset($confirmpassword_error)) echo $confirmpassword_error; ?></span>



                            </div>



                        </div>



                        <br>



                                            



                   <script>



function myFunction() {



var pw_ele = document.getElementById("password");



if (pw_ele.type === "password") {



pw_ele.type = "text";



} else {



pw_ele.type = "password";



}



}



</script>







<script>



function myFunction1() {



var pw_ele = document.getElementById("confirmpassword");



if (pw_ele.type === "password") {



pw_ele.type = "text";



} else {



pw_ele.type = "password";



}



}



</script>



            <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">



                     



                     <center> <input type="checkbox" name="checkbox" value="check" id="agree" required /> I have read and agree to the <a href="#" data-target="#modalTC" data-toggle="modal" class="btn-link">Terms and Condition</a> and <a href="#" data-target="#modalDP" data-toggle="modal" class="btn-link"> Privacy Policy</a></center> 



                                              <br>



                      <br>







                        <div class="col-md-6 offset-md-4">



                            <input type="submit" name= "signup" value="Register" class="form-control btn btn-block btn-primary">



                        <br>



                        </form>



                            <a href="login.php" class="form-control btn btn-link">



                               Already have an account? Login here.



                            </a>



                        </div>



                </div>



                </form>







            </div>



        </div>



    </div>



</div>



</div>



</main>











</body>



</html>