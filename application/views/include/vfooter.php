<div id="footer">
    <span id="copyright">Copyright © <?= date('Y')?> panomatics. All Rights Reserved.</span>
        <a href="<?= BASE_URL; ?>/terms" class="footer-links">Terms of Use</a>
        <span>|</span>
        <a href="<?= BASE_URL; ?>/privacy" class="footer-links">Pivacy Policy</a>
        <?php if($email != '') { ?>
        <span>|</span>
        <a href="<?= BASE_URL; ?>/signin/signout">signout</a>
        <?php } ?>
    </div>
<div id="mobile-menu" class="popup-wrapper">
        <div class="popup-content">
            <div class="bg-popup-wrapper"></div>
            <div class="popup-box-wrapper">
                <div class="popup-box">
                    <a id="close-mobile-menu" class="button-close"></a>
                    <ul>
                    <li><a href="<?= BASE_URL; ?>/home">PORTFOLIO</a>
                    </li>
                    <li><a href="<?= BASE_URL; ?>/statistics">STATISTICS</a>
                    </li>
                    <li><a href="<?= BASE_URL; ?>/product">PRODUCTS</a>
                    </li>
                    <li><a href="<?= BASE_URL; ?>/blog">BLOG</a>
                    </li>
                    <li><a href="<?= BASE_URL; ?>/contact">CONTACT</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


  <div id="custom-select-wrapper" style="display: none;">
                 
                <div id="" class="custom-select active">
                    <select name="" required>
                        <option value="" disabled selected></option>
                         
                    </select>
                </div>
                
            </div>