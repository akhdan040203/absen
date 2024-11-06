<?php
if ($mod == '') {
    header('location:../404');
    echo 'kosong';
} else {
    include_once 'sw-mod/sw-header.php';

    if (!isset($_COOKIE['COOKIES_MEMBER']) && !isset($_COOKIE['COOKIES_COOKIES'])) {
        setcookie('COOKIES_MEMBER', '', 0, '/');
        setcookie('COOKIES_COOKIES', '', 0, '/');
        setcookie("COOKIES_MEMBER", "", time() - $expired_cookie);
        setcookie("COOKIES_COOKIES", "", time() - $expired_cookie);
        session_destroy();
        header("location:./");
    } else {

        echo '
        <!-- App Capsule -->
        <div id="appCapsule">
            <!-- Wallet Card -->
            <div class="section wallet-card-section pt-1">
                <div class="wallet-card">
                    <div class="balance">
                        <div class="left">
                            <span class="title"> Selamat ' . $salam . '</span>
                            <h4>' . ucfirst($row_user['employees_name']) . '</h4>
                        </div>
                        <div class="right">
                            <span class="title">' . tgl_ind($date) . ' </span>
                            <h4><span class="clock"></span></h4>
                        </div>
                    </div>
                    <!-- Balance -->
                    <div class="text-center">
                        <label for="cars">Pilih Kehadiran:</label>
                        <select name="cars" id="cars" style="width: 100%; padding: 12px; font-size: 16px; color: #333; border: 1px solid #ddd; border-radius: 8px; appearance: none; outline: none; background-color: #f9f9f9; text-align: center; cursor: pointer; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                            <option value="hadir">Hadir Bosku</option>
                            <option value="sakit">Sakit Bosku</option>
                            <option value="izin">Izin Bosku</option>
                        </select>
                        <button style="width: 100%; padding: 12px; font-size: 16px; color: white; background-color: #FF396F; border: none; border-radius: 8px; cursor: pointer; font-weight: bold; margin-top: 16px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">Absen Masuk</button>
                    </div>
                    <!-- * Wallet Footer -->
                </div>
            </div>
            <!-- Card -->
        </div>
        <!-- * App Capsule -->
        ';
    }
    include_once 'sw-mod/sw-footer.php';
}
