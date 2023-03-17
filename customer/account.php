<?php
$pageTitle = "Аккаунт";
require'template/header.php';
?>
<body>
        <div>
            
            
        </div>
    <!--Добавляем верзнее меню-->
    <?php 
    $pageName = "Аккаунт";
    require 'template/main.php';
    ?>    
        <div class="cl-os">
                        <div class="sat-1 cl-sat">
                            <p class="prof">Мой профиль</p>
                            <div class="fio">Мирзоев Курбон <br><tet>99 999 99 99</tet></div>
                            <button class="call" onclick="if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { window.location.href='tel:+1-555-555-5555'; } else { alert('Вы можете связаться с поддержкой по номеру: +992-500-50-50-50'); }">Связаться с поддержкой</button><!--Если это телефон, он перенаправляет на звонок, если нет, то получаем уведомление по какому номеру можно связаться с нами-->
                            <form action="../index.php" method="post">
                              <button type="submit" class="logout">Выйти</button>
                            </form>
                            <a href="#" class="politic">Правила пользования сервисом</a>
                        </div>
                        <div class="sat-1">
                            <p class="prof">Автомобили</p>
                             <div id="car-list"></div>
                            <button id="add-car-btn" class="add-btn">Добавить</button>

                            <div id="add-car-modal" class="modal">
                              <div class="modal-content">
                                <span class="close">&times;</span>
                                <form id="car-form">
                                  <label class="cl-lb">Введите машину</label><br>
                                  <label for="photo">
                                      <img src="images/add.svg" alt="Add Photo">
                                  </label>
                                  <input type="file" id="photo" accept="image/*"  style="display: none;">
                                  <br>
                                  <label class="ca-nm" for="number">Номер машины:</label><br>
                                    <input type="number" placeholder="0000" id="number" minlength="3" maxlength="4" oninput="if(this.value.length > 4) this.value = this.value.slice(0,4)" required>
                                    <input type="text" placeholder="XX" id="letters" minlength="2" maxlength="2" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '').toUpperCase()" pattern="[a-zA-Z]{2}" required>
                                    <input type="number" placeholder="01" id="digits" min="1" max="10" oninput="if(this.value.length > 2) this.value = this.value.slice(0,2); " required>

                                  <br>
                                  <label class="ca-nm" for="passport">Серия техпаспорта:</label><br>
                                  <input type="text" placeholder="0000*" id="passport" required>
                                  <br>
                                  <button class="en-bn" type="submit">Завершить</button>
                                </form>
                              </div>
                            </div>

                           
                        </div>
                        <div class="sat-1">
                            <p class="prof">Мои карты</p>
                            
                        </div>
                    </div>
        
    
    
    
    <!--Добавляем Footer-->
    <?php require 'template/footer.php'?>
</body>
</html>
