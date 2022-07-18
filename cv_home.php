<?php
$name = 'Konstantin';
$position = 'Developer';
$address = 'Moscow, Russia';
$email = 'example@server.com';
$phone = '+7 987 654 32 10';
$age = 34;
$ageInDays = $age * 365;

$skills = [
  'photoshop' => '90%',
  'photography' => '80%',
  'illustrator' => '75%',
  'media' => '50%',
  'copyrighting' => '100%'
];

$experience = [
  'Front End Developer' => 'Jan 2015',
  'Web Developer / something.com' => 'Mar 2012 - Dec 2014',
  'Graphic Designer / designsomething.com' => 'Jun 2010 - Mar 2012',
];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=MB2LyShGk5JVIJI_GS88Ts82XvJlq7ZR4P1AhmcyfCS7PG0xrMV_34hDs2bWPtS72D-56RIbxrrLkQ8jt_W82THH_bubFB4pLrEpCPattlX3mcnP8poxsMEJYTPlklqDlDvOZMtjYVIZd0AEPae5jMvOpmIGnnRgx5cWRk3tiLtH19c9nyG853M5tSerU53N55iPjqOIqasMdAASlwk4NGKOa1b1560jnnl-344Uc-4cYvx3VO0gi8Ln_eFRqzqqbvs420qD8AkWAHnBto5a9culxXZq7T0QLdKLvseuKskubafJjoPxYVsmalS2BOyMUr_uXG7WeNYEIpp356dxvVoN-5aV2OVvWeDdz3hlfW-y0VSFb9UleS0kBtVamaOtNBdw4y-619VudsggGjKzpmRMmfQ265Q1IzJzWV-Kxz1uamILBBH_0852VGl6ssap_Oy55zkA4aHQgSsHStoyXlm8B0004IlcY6fy-g_lre64vr3Kb_BF5Qsmx9y6NitB7-405lVFYeXSdJHcnHMcZQAX8l5ycJPoJJ_mg0d8idpx8ua8oxWsR35hfE1Hl9RzoRvrhA0mjoZcIOWYpNpoCw9lQ2ijcg_Hbs96YZOGEfOlTJcGmMPM8umdKSGlphUKD2R5eWKP69OmxPrnl1vHFVa5hKIwqWy-ikh_TbfTVSjDcaZ_8zI38at3Kv6qgYOeXKgN_ADAtX4-4EYoykOAB5IZ_5-b1TG2YKznKXyV4Sxr10PF6nh_o0jCikb_YzrrIqzDbolRd7w5KBLAOq3rXnz-bqviWmi9IixoExea5gW8b6MCsYeqtMUeyKzYx2te48DCiZgL2BlT1-DmJpbjpYqUOzYEPdqb4LDX5OqbyF037e89ysy8n03PVKwBJ_0F1RcMb-68xN07LJD2YcQq1dIao2Rav0-s6_gk1_-Xyl_jbCv2rqnkhjaOuci_SRekutz3-TVcZSNNE8qUpo9GZ5XSmZVZL3_7PqHMD6Wjtu4JjQyvsTXCfa-7qpkaOWC4svIpOWzNbbwsoLYtidno4iImWd2fOXePodzPnsQXxJ8" charset="UTF-8"></script>
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p>
              <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $position; ?>
            </p>
            <p>
              <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $address; ?>
            </p>
            <p>
              <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $email; ?>
            </p>
            <p>
              <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $phone; ?>
            </p>
            <p>
              <i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
              Возраст: <?php echo $age; ?>
            </p>
            <p>
              <i class="fa fa-user-plus fa-fw w3-margin-right w3-large w3-text-teal"></i>
              Возраст в днях: <?php echo $ageInDays; ?>
            </p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>

            <?php foreach ($skills as $skillname => $skillvalue) : ?>
              <p><?php echo ucfirst($skillname); ?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skillvalue ?>">
                  <?php echo $skillvalue; ?>
                </div>
              </div>
            <?php endforeach ?>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo key($experience); ?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience[key($experience)]; ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
            <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
            <hr>
          </div>

          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo (array_keys($experience)[1]); ?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience[array_keys($experience)[1]]; ?></h6>
            <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
            <hr>
          </div>

          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo (array_keys($experience)[2]); ?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience[array_keys($experience)[2]]; ?></h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>

</body>

</html>