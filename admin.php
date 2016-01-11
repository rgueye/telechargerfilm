<?php
require_once '_defines.php';
require_once 'data/_main_data.php';
$site_data[PAGE_ID] = 'admin';
require_once 'view_parts/_page_base.php';
?>

<?php if ($site_data[USER_IS_LOGGED] == false){
    header('Location: '.LOCAL_URL.'/forbidden.php');
} ?>


<div id="main" style="color: white;">
    <?php echo "Boujour Dieu toi admin de ce domaine, avec une base de données, tu contrôleras!" ?>
</div>

<div id="admin" style="color: green">
    <p><?php echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat vestibulum tortor, sed tincidunt enim facilisis vel. Aliquam tempor nisi non sem volutpat pulvinar. In egestas tincidunt placerat. Donec convallis ullamcorper sapien, quis mattis ligula feugiat quis. Sed arcu tortor, tristique sit amet tempus non, feugiat lacinia nisi. Nulla pretium gravida ex, id auctor tortor ultrices nec. Curabitur venenatis mi odio, ac condimentum lorem tincidunt quis. Nam varius mollis nunc, non vehicula urna efficitur vel. In leo nunc, blandit at tortor auctor, laoreet posuere tortor."; ?> </p>
    <p><?php echo "Praesent lacus eros, aliquet ut eleifend vitae, sagittis nec nibh. Nullam at molestie nibh, et molestie lorem. Nullam dolor tortor, facilisis ut semper at, volutpat eget turpis. Vestibulum placerat maximus vulputate. Duis porta massa id volutpat fermentum. Nullam id orci eu elit varius pellentesque. Nullam dignissim, ante sed luctus porta, quam est vehicula enim, at porta eros elit rutrum felis."; ?> </p>
    <p><?php echo "Vivamus auctor sodales ligula at lobortis. Praesent convallis ante sodales diam pulvinar, quis laoreet magna semper. Vestibulum tempor aliquam mauris. Morbi scelerisque mattis nibh, et semper metus tincidunt at. Aliquam pellentesque euismod sapien, in scelerisque tellus consectetur et. Praesent et nisl cursus, euismod augue id, sodales purus. In venenatis mi vel aliquet mollis. Ut vel aliquam lorem. Phasellus iaculis lorem libero, ac porttitor lorem interdum nec. Praesent vehicula nibh ac eros ornare varius. Praesent nisl nibh, finibus eget ligula at, venenatis commodo elit. Nullam libero nisl, laoreet vitae aliquam quis, eleifend eu libero. Maecenas sed dictum orci. Pellentesque scelerisque lectus ut urna aliquet tempor. Nulla facilisi. In sed lectus lectus." ?></p>
    <p><?php echo "Aenean eu placerat leo. Ut rutrum ligula at nisl aliquet porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet orci ac turpis tincidunt blandit id sed mi. Cras facilisis quam vel commodo dignissim. Praesent ullamcorper mi et ex feugiat, eget auctor augue scelerisque. Praesent eu diam ipsum. Praesent at leo metus." ?></p>
    <p><?php echo "Nam non dolor at ipsum dignissim viverra vel consectetur nisi. Aliquam convallis et elit vitae venenatis. Donec interdum sit amet massa eget convallis. Fusce pellentesque nulla a eros dapibus, non condimentum sapien laoreet. Duis nec imperdiet lacus, eget tempus odio. Proin ligula ante, ornare vitae tristique ut, commodo nec leo. Fusce fermentum euismod leo. Nam dictum, lorem eu hendrerit sollicitudin, leo lacus vestibulum neque, semper congue quam lacus non eros. Vestibulum eget pharetra urna." ?></p>
    <p><?php echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat vestibulum tortor, sed tincidunt enim facilisis vel. Aliquam tempor nisi non sem volutpat pulvinar. In egestas tincidunt placerat. Donec convallis ullamcorper sapien, quis mattis ligula feugiat quis. Sed arcu tortor, tristique sit amet tempus non, feugiat lacinia nisi. Nulla pretium gravida ex, id auctor tortor ultrices nec. Curabitur venenatis mi odio, ac condimentum lorem tincidunt quis. Nam varius mollis nunc, non vehicula urna efficitur vel. In leo nunc, blandit at tortor auctor, laoreet posuere tortor."; ?> </p>
    <p><?php echo "Aenean eu placerat leo. Ut rutrum ligula at nisl aliquet porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet orci ac turpis tincidunt blandit id sed mi. Cras facilisis quam vel commodo dignissim. Praesent ullamcorper mi et ex feugiat, eget auctor augue scelerisque. Praesent eu diam ipsum. Praesent at leo metus." ?></p>
</div>

<?php
require_once 'view_parts/_page_bottom.php';
?>