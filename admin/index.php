<body>
    <table class="wp-list-table widefat fixed striped">
        <thead>
            <th class = 'manage-column'>Name</th>
            <th class = 'manage-column'>From</th>
            <th class = 'manage-column'>Subject</th>
            <th class = 'manage-column'>Message</th>
        </thead>
        <tbody> 
<?php
$args = array('order' => 'desc', 'orderby' => 'name');    
foreach( Flamingo_Inbound_Message::find($args) as $data){
        $message = $data->fields; 
        var_dump($data);
        echo "<br>";
}
$data =  Flamingo_Inbound_Message::find($args);
foreach( Flamingo_Inbound_Message::find($args) as $data){
        $message = $data->fields; 
?>
            <tr>
                <td> <?php echo $data->from; ?></td>
                <td> <?php echo $message["your-email"]; ?></td>
                <td> <?php echo $message["your-subject"]; ?></td>
                <td> <?php echo $message["your-message"]; ?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</body>