##To Do

###Create hotels page

Add all of the custom fields created yesterday to it. 

Need to add this block of code to the page that I create for hotels:

```php
<?php 
 
$location = get_field('location');
 
if( !empty($location) ):
?>
<div class="acf-map">
  <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

```
