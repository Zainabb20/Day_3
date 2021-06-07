
<html>
    <body>
        <h2>Form</h2>
        <form action="processper.php" method="post">
            <table>
                <tr>
                    <td>
                        Marks in JAVA:
                     </td>
                     <td>
                         <input type="number" Name="txt1" min='1' max='100' required/>
                     </td>
                </tr>
                <tr>
                    <td>
                        Marks in Python:
                    </td>
                    <td>
                         <input type="number" Name="txt2" min='1' max='100' required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Marks in C:
                    </td>
                    <td>
                        <input type="number" Name="txt3" min='1' max='100'  required/>
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

