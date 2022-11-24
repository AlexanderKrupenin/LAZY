<IDOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>
    <div class="container">
    <h1> ItGid.info - template и создание фрагментов</h1> <section>
    <ul>
    <li><table>
        <tr>
        <td width=100px> Устройство:
        </td>
        <td width=40px><?php echo($device_name); ?> 
        </td>
        </tr>
        </table>
        <table border=1>
        <tr>
        <td width=100px> Tемпература
        </td>
        <td width=40px><?php echo($temperature); ?>
        </td>
        <td width=150px><?php echo($temperature_dt); ?>
        </td>
        </tr>
        <tr>
        <td width=100px> Реле
        </td>
        <td width=40px><?php echo($out_state); ?>
        </td>
        <td width=150px> <?php echo($out_state_dt); ?>
        </td>
        </tr>
        </table>
        <form method=POST>
        <button name=button_on value=1>Включить реле</button>
        </form>
        <form method=POST>
        <button  name=button_off value=1>Выключить реле</button>
        </form><br>
    </li
    </ul>
    </section>
    <template id="element-li">
    <li><b>Название: </b><span></span></li>
    </template>
    <div class="courses">
    <ul>

    </ul>
    </div>
    </div>
    <script src="app.js"></script>
    </body>
    </html>