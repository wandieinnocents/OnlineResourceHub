<!DOCTYPE html>
<html>
<head>

    <title>SENSE ONLINE WEB PORTAL</title>

</head>
<body>
    <!-- BODY -->
    <table class="body-wrap">
        <tr>
            <td></td>
            <td class="container" style="background-color:#FFFFFF">

                <div class="content">
                    <table>
                        <tr>
                            <td>

                                <center>
                                    <h3>Hi, Administrator</h3>
                                </center>

                                <table style="margin-bottom:20px">
                                    <tr>
                                        <td>
                                            <div class="callout" style="text-align:center;margin:0 auto">
                                                <h3><b>You have an email from</b></h3>
                                                <div class="callout" style="text-align:center;margin:0 auto">
                                                    <h4>{{ $details['name'] }}</h4>
                                                    <p>Subject : {{ $details['subject'] }}</p>
                                                    <p>Phone : {{ $details['phone'] }}</p>

                                                </div>
                                        </td>
                                    </tr>
                                </table>

                                <p style="text-align:left"> Message, </p>

                                <table class="social" width="100%">
                                    <tr>
                                        <td>

                                            <table style="padding:15px;">
                                                <tr>
                                                    <td>
                                                        <p
                                                            style="font-size:12px !important;border-bottom:1px solid #ccc;padding-bottom:15px">
                                                            {{ $details['description'] }}

                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>


                                        </td>
                                    </tr>
                                </table>
                </div>

            </td>

        </tr>
    </table><!-- /BODY -->


</body>

</html>
