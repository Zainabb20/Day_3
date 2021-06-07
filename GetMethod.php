<html>
    <body>
        //Program Using Get method:
        <!--
            Method: Get
            Get is Default method to pass data in form tag.
            Data will be visible in URL.
            It is not a secure method to pass sensitive data like username and password.
            Useful for Sorting & Searching.
        
            Method: Post
            Secure Method to pass Sensitive Data.
            Data will be hidden.
        
            Action: You can specify a page name where data will submit.
        -->
        <h2>Form</h2>
        <form action="processget.php">
            <table>
                <tr>
                    <td>
                        Name:
                     </td>
                     <td>
                         <input type="text" Name="txt1">
                     </td>
                </tr>
                <tr>
                    <td>
                        Age:
                    </td>
                    <td>
                         <input type="number" Name="txt2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"/>
                    </td>
                    <td>
                         <input type="reset"/>
                    </td>
                </tr>
            </table>
            
        </form>
    </body>
</html>
