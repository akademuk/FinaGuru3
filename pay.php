<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.svg" type="image/svg" sizes="16x16">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <title>FinaGuru</title>
</head>

<body>
    <header>
        <div class="wrapper pay">
            <div class="logotype">
                <a href="index.html">
                    <img src="img/logo.svg" alt="finaguru">
                    <span class="logoTextBlack">fina</span>
                    <span class="logoTextGreen">guru</span>
                </a>
            </div>
        </div>
    </header>

    <?php
    if (!empty($_POST['valueMoney'])) {
        $valueMoney = $_POST['valueMoney'];
    }

    if (!empty($_POST['valueDate'])) {
        $valueDate = $_POST['valueDate'];
    }
    ?>


    <main class="payMain">
        <div class="wrapper">
            <div class="payMainContent">


                <form action="" id="payForm">


                    <div class="payMainContentTop">
                        <p id="resultSumPay"><?php echo $valueMoney; ?></p>
                        <p id="resultPercentPay"><?php echo $valueDate; ?></p>
                        <input type="hidden" name="valueMoney" value="<?php echo $valueMoney; ?>" >
                        <input type="hidden" name="valueDate" value="<?php echo $valueDate; ?>" >
                    </div>
                    <div class="payForm1">
                        <div id="invalid"></div>

                        <p class="stepForm"><span id="like">1</span>Контактна інформація</p>

                        <div id="payForm1">
                            <input type="text" name="firstName" id="firstName" placeholder="Ім’я">
                            <input type="text" name="secondName" id="secondName" placeholder="Прізвище">
                            <div class="phoneFlag">
                                <input id="phone" name="phone" type="text" placeholder="(+380)_ _ _ _ _ _ _ _ _">
                            </div>
                            <input type="email" name="email" id="email" placeholder="Email">

                            <div class="checboxSection">
                                <input type="checkbox" class="checkbox" id="agree" name="agree" value="Я даю згоду на обробку даних">
                                <label for="agree">
                                    Я даю чітку згоду Traffic Control приймати рішення щодо мене виключно на основі
                                    автоматизованої обробки даних, включаючи профілювання (як пояснюється в Політиці
                                    обробки даних).
                                </label>
                            </div>

                            <div class="checboxSection">
                                <input type="checkbox" name="reglament" id="reglament" value="Я згоден дотримуватися умов Регламенту">
                                <label for="reglament">
                                    Я також згоден дотримуватися умов Регламенту.
                                </label>
                            </div>

                            <button type="button" class="btnSubmit nobutton" id="btnSubmit2">Продовжити</button>
                            <!-- <input type="submit" value="Продовжити" class="paySubmit" onclick="hide(this.form)"> -->
                        </div>
                    </div>

                    <p class="stepForm"><span id="like2">2</span>Персональна інформація</p>
                    <div id="payForm2">
                        <div class="textAfter">
                            <input type="text" placeholder="Input placeholder">
                        </div>
                        <!--
                        <div class="textAfter">
                            <select name="user_profile_color_1">
                                <option value="1">Input placeholder</option>
                                <option value="2">Input placeholder</option>
                                <option value="3">Input placeholder</option>
                                <option value="4">Input placeholder</option>
                                <option value="5">Input placeholder</option>
                                <option value="6">Input placeholder</option>
                            </select>
                        </div>
                        <div class="textAfter">
                            <input type="text" placeholder="Input placeholder">
                        </div>
                        <div class="textAfter">
                            <select name="user_profile_color_1">
                                <option value="1">Input placeholder</option>
                                <option value="2">Input placeholder</option>
                                <option value="3">Input placeholder</option>
                                <option value="4">Input placeholder</option>
                                <option value="5">Input placeholder</option>
                                <option value="6">Input placeholder</option>
                            </select>
                        </div>
                        <div class="textAfter">
                            <input type="text" placeholder="Input placeholder">
                        </div>
                        <div class="textAfter">
                            <select name="user_profile_color_1">
                                <option value="1">Input placeholder</option>
                                <option value="2">Input placeholder</option>
                                <option value="3">Input placeholder</option>
                                <option value="4">Input placeholder</option>
                                <option value="5">Input placeholder</option>
                                <option value="6">Input placeholder</option>
                            </select>
                        </div>
                        <div class="textAfter">
                            <input type="text" placeholder="Input placeholder">
                        </div>
                        <div class="textAfter">
                            <select name="user_profile_color_1">
                                <option value="1">Input placeholder</option>
                                <option value="2">Input placeholder</option>
                                <option value="3">Input placeholder</option>
                                <option value="4">Input placeholder</option>
                                <option value="5">Input placeholder</option>
                                <option value="6">Input placeholder</option>
                            </select>
                        </div>-->
                        <textarea name="" id="" cols="30" rows="10" placeholder="Коментарий"></textarea>
                        <div class="checboxContainer">
                            <div class="checboxSection">
                                <input type="checkbox" name="" id="checboxSection1">
                                <label for="checboxSection1">
                                    Коментарий
                                </label>
                            </div>
                            <!--  
                          <div class="checboxSection">
                                <input type="checkbox" name="" id="checboxSection2">
                                <label for="checboxSection2">
                                    Коментарий
                                </label>
                            </div>
                            <div class="checboxSection">
                                <input type="checkbox" name="" id="checboxSection3">
                                <label for="checboxSection3">
                                    Коментарий
                                </label>
                            </div>
                            <div class="checboxSection">
                                <input type="checkbox" name="" id="checboxSection4">
                                <label for="checboxSection4">
                                    Коментарий
                                </label>
                            </div>
                            <div class="checboxSection">
                                <input type="checkbox" name="" id="checboxSection5">
                                <label for="checboxSection5">
                                    Коментарий
                                </label>
                            </div>
                            <div class="checboxSection">
                                <input type="checkbox" name="" id="checboxSection6">
                                <label for="checboxSection6">
                                    Коментарий
                                </label>
                            </div>-->
                        </div>
                        <div class="inputFile">
                            Документ
                            <input type="file">
                        </div>
                        <div class="recaptcha">
                            <img src="img/recaptcha.png" alt="">
                        </div>
                        <button type="button" class="btnSubmit" id="btnSubmit3">Продовжити</button>
                        <!-- <input type="submit" value="Продовжити" class="paySubmit"> -->
                    </div>


                    <p class="stepForm"><span id="like3">3</span>Форма зайнятості</p>
                    <div id="payForm3">
                        <!-- <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">-->
                        <input type="text" placeholder="Text">
                        <input type="text" placeholder="Text">
                        <button type="submit" class="btnSubmit" id="closeForm">Відправити</button>
                    </div>

                    <div id="okSubmit"></div>

                </form>

            </div><!-- //payMainContent  -->
        </div>

        <div class="popup__bg">
            <div class="popup closePopapForm">
                <svg class="close-popup" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#222222" />
                </svg>
                <div class="popupContainer">
                    <h3>Додайте свій відгук</h3>
                    <a href="index.html" class="close-popup">Перейти на головну сторінку</a>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="srcipt/jquery.validate.min.js"></script>
    <script src="srcipt/contactform.js"></script>
    <script src="srcipt/popup.js"></script>
    <script>
        let like = document.getElementById("like");
        let like2 = document.getElementById("like2");
        let like3 = document.getElementById("like3");
            
        $(document).ready(function() {
            $("#btnSubmit2").on('click', function() {
                like.classList.add('likeAdd');
            });
            $("#btnSubmit3").on('click', function() {
                like2.classList.add('likeAdd');
            });
            $("#closeForm").on('click', function() {
                like3.classList.add('likeAdd');
            });
        });
           
    </script>


</body>

</html>