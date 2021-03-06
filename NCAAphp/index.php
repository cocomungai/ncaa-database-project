<style>
    html * {
        font-family: Arial, sans serif !important;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    td, th {
        padding: 5px 20px 5px 20px;
        border-bottom: 1px solid #aaa;
        text-align: center;
    }
</style>

<h1>Home Page</h1>

<body>
<table>
    <tr>
        <th colspan="4">Searches</th>
    </tr>
    <tr>
        <td>
            <a href="getScore.php">Search game scores</a>
        </td>
        <td>
            <a href="getPlayer.php">Search for players</a>
        </td>
        <td>
            <a href="getTeam.php">Search for teams</a>
        </td>
        <td>
            <a href="getTeamSchedule.php">Search for schedules</a>
        </td>
    </tr>
    <tr>
        <th colspan="4">
            Inserts
        </th>
    </tr>
    <tr>
        <td>
            <a href="insertGame.php">Insert new game</a>
        </td>
        <td>
            <a href="insertTeam.php">Insert new team</a>
        </td>
        <td>
            <a href="insertPlayer.php">Insert new player</a>
        </td>
        <td>
            <a href="insertStats.php">Insert player stats</a>
        </td>
    </tr>
</table>
</body>