
<html>
    <body>
        <h2>Form</h2>
        <form action="processpost.php" method="post">
            <table>
                <tr>
                    <td>
                        Name:
                     </td>
                     <td>
                         <input type="text" Name="txt1"  required/>
                     </td>
                </tr>
                <tr>
                    <td>
                        Age:
                    </td>
                    <td>
                         <input type="number" Name="txt2" min='1' max='100' required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                         <input type="email" Name="txt3"  required/>
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
