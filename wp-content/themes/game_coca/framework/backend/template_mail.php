<table style="margin:0 auto" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr>
        <td>
            <font style="font-size:20px"><br></font><br>
            Chào mừng bạn đến với Coca, <?php print $name ?>!
        </td>
    </tr>
    <tr>
        <td>
            <center>
                <table style="margin:0 auto" cellpadding="0" cellspacing="0" width="60%">
                    <tbody><tr>
                        <td style="color:#999999;line-height:1.5em">
                            <br>
                            Tài khoản của bạn đã sẵn sàng.<br>
                            <br>
                        </td>
                    </tr>
                    </tbody></table>
            </center>
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <a href="<?php print $url; ?>" style="background-color:#448ccb;border-radius:4px;color:#ffffff;display:inline-block;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:50px;text-align:center;text-decoration:none;width:240px" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=<?php print $url; ?>">Kích hoạt tài khoản của bạn</a>
            </div>
            <br>
            <br>

            Bạn cũng có thể dán liên kết sau vào trình duyệt của bạn:<br>
            <a href="<?php print $url; ?>" target="_blank" data-saferedirecturl="<?php print $url; ?>"><?php print $url; ?></a>
            <br>
            <br>
            <font style="color:#999;font-size:11px">
                <br>
                Nếu bạn không tạo một tài khoản trong Coca, bỏ qua email này và không có tài khoản sẽ được tạo ra.<br>
                <br>
            </font>
        </td>
    </tr>
    </tbody></table>