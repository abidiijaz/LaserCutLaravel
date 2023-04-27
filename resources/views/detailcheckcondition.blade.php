<?php 
    $diameters=$focal_lengths=$powerModels=$voltages=$set_words=$sizes=$working_areas=$bone_diameterss=$models=$output_voltages=$model_numbers=$types=$calibers=$sub_strate_sizes=$wavelengths=$materials=$styles=$colors= array();
   
    if($product->diameter != null){
        $diameters = explode (",", $product->diameter);
    }
    if($product->focal_length != null){
        $focal_lengths = explode (",", $product->focal_length);
    }
    if($product->power_model != null){
        $powerModels = explode (",", $product->power_model);
    }
    if($product->voltage != null){
        $voltages = explode (",", $product->voltage);
    }
    if($product->set_word != null){
        $set_words = explode (",", $product->set_word);
    }
    if($product->size != null){
        $sizes = explode (",", $product->size);
    }
    if($product->working_area != null){
        $working_areas = explode (",", $product->working_area);
    }
    if($product->bone_diameters != null){
        $bone_diameterss = explode (",", $product->bone_diameters);
    }
    if($product->model != null){
        $models = explode (",", $product->model);
    }
    if($product->output_voltage != null){
        $output_voltages = explode (",", $product->output_voltage);
    }
    if($product->model_number != null){
        $model_numbers = explode (",", $product->model_number);
    }
    if($product->type != null){
        $types = explode (",", $product->type);
    }
    if($product->caliber != null){
        $calibers = explode (",", $product->caliber);
    }
    if($product->sub_strate_size != null){
        $sub_strate_sizes = explode (",", $product->sub_strate_size);
    }
    if($product->wavelength != null){
        $wavelengths = explode (",", $product->wavelength);
    }
    if($product->material != null){
        $materials = explode (",", $product->material);
    }
    if($product->style != null){
        $styles = explode (",", $product->style);
    }
    if($product->color != null){
        $colors = explode (",", $product->color);
    }
    // print_r($set_words);
?>
<!-- For Diameter Checkout -->
 @if(count($diameters)===0)
 @else
     <label for="size"><h6>Diameter</h6> </label><br/>
     @foreach ($diameters as $key=>$diameter)
         <input type="radio" id="test_<?php echo $key; ?>" name="diameter">
         <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $diameter }}</label>
     @endforeach
 @endif
 <!-- Diameters check End -->
 <!-- For FocalLength Checkout -->

 @if(count($focal_lengths)===0)
 @else
    <br/>
     <label for="size"><h6>Focal Length</h6> </label><br/>
     @foreach ($focal_lengths as $key=>$focallength)
         <input type="radio" id="f_length_<?php echo $key; ?>" name="focal_length">
         <label class="ab_custom_field_f_length" for="f_length_<?php echo $key; ?>">{{ $focallength }}</label>
     @endforeach
 @endif
 <!-- FocalLength check End -->
 <!-- For Power Model Checkout -->

 @if(count($powerModels)===0)
 @else
    <br/>
     <label for="size"><h6>Power Model</h6> </label><br/>
     @foreach ($powerModels as $key=>$powerModel)
         <input type="radio" id="test_<?php echo $key; ?>" name="power_model">
         <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $powerModel }}</label>
     @endforeach
 @endif
 <!-- Power Model check End -->
<!-- For Voltage Checkout -->
@if(count($voltages)===0)
@else
<br/>
<label for="size"><h6>Voltage</h6> </label><br/>
@foreach ($voltages as $key=>$voltage)
    <input type="radio" id="test_<?php echo $key; ?>" name="voltage">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $voltage }}</label>
@endforeach
@endif
<!-- Voltage check End -->
<!-- For Set Checkout -->
@if(count($set_words)===0)
@else
<br/>
<label for="size"><h6>Set</h6> </label><br/>
@foreach ($set_words as $key=>$set_word)
    <input type="radio" id="test_<?php echo $key; ?>" name="set_word">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $set_word }}</label>
@endforeach
@endif
<!-- Set check End -->
<!-- For Size Checkout -->
@if(count($sizes)===0)
@else
<br/>
<label for="size"><h6>Size</h6> </label><br/>
@foreach ($sizes as $key=>$size)
    <input type="radio" id="test_<?php echo $key; ?>" name="size">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $size }}</label>
@endforeach
@endif
<!-- Size check End -->
<!-- For working_areas Checkout -->
@if(count($working_areas)===0)
@else
<br/>
<label for="size"><h6>Working Area</h6> </label><br/>
@foreach ($working_areas as $key=>$working_area)
    <input type="radio" id="test_<?php echo $key; ?>" name="working_area">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $working_area }}</label>
@endforeach
@endif
<!-- working_areas check End -->
<!-- For bone_diameterss Checkout -->
@if(count($bone_diameterss)===0)
@else
<br/>
<label for="size"><h6>Bone Diameter</h6> </label><br/>
@foreach ($bone_diameterss as $key=>$bone_diameters)
    <input type="radio" id="test_<?php echo $key; ?>" name="bone_diameters">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $bone_diameters }}</label>
@endforeach
@endif
<!-- bone_diameterss check End -->
<!-- For models Checkout -->
@if(count($models)===0)
@else
<br/>
<label for="size"><h6>Model</h6> </label><br/>
@foreach ($models as $key=>$model)
    <input type="radio" id="test_<?php echo $key; ?>" name="model">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $model }}</label>
@endforeach
@endif
<!-- models check End -->
<!-- For output_voltages Checkout -->
@if(count($output_voltages)===0)
@else
<br/>
<label for="size"><h6>Output Voltage</h6> </label><br/>
@foreach ($output_voltages as $key=>$output_voltage)
    <input type="radio" id="test_<?php echo $key; ?>" name="output_voltage">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $output_voltage }}</label>
@endforeach
@endif
<!-- output_voltages check End -->
<!-- For model_numbers Checkout -->
@if(count($model_numbers)===0)
@else
<br/>
<label for="size"><h6>Model Numbers</h6> </label><br/>
@foreach ($model_numbers as $key=>$model_number)
    <input type="radio" id="test_<?php echo $key; ?>" name="model_number">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $model_number }}</label>
@endforeach
@endif
<!-- model_numbers check End -->
<!-- For types Checkout -->
@if(count($types)===0)
@else
<br/>
<label for="size"><h6>Types</h6> </label><br/>
@foreach ($types as $key=>$type)
    <input type="radio" id="test_<?php echo $key; ?>" name="type">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $type }}</label>
@endforeach
@endif
<!-- types check End -->
<!-- For calibers Checkout -->
@if(count($calibers)===0)
@else
<br/>
<label for="size"><h6>Caliber</h6> </label><br/>
@foreach ($calibers as $key=>$caliber)
    <input type="radio" id="test_<?php echo $key; ?>" name="caliber">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $caliber }}</label>
@endforeach
@endif
<!-- calibers check End -->
<!-- For calibers Checkout -->
@if(count($sub_strate_sizes)===0)
@else
<br/>
<label for="size"><h6>sub strate sizes</h6> </label><br/>
@foreach ($sub_strate_sizes as $key=>$sub_strate_size)
    <input type="radio" id="test_<?php echo $key; ?>" name="sub_strate_size">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $sub_strate_size }}</label>
@endforeach
@endif
<!-- calibers check End -->
<!-- For wavelengths Checkout -->
@if(count($wavelengths)===0)
@else
<br/>
<label for="size"><h6>WaveLength</h6> </label><br/>
@foreach ($wavelengths as $key=>$wavelength)
    <input type="radio" id="test_<?php echo $key; ?>" name="wavelength">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $wavelength }}</label>
@endforeach
@endif
<!-- wavelengths check End -->
<!-- For materials Checkout -->
@if(count($materials)===0)
@else
<br/>
<label for="size"><h6>Materials</h6> </label><br/>
@foreach ($materials as $key=>$material)
    <input type="radio" id="test_<?php echo $key; ?>" name="material">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $material }}</label>
@endforeach
@endif
<!-- materials check End -->
<!-- For styles Checkout -->
@if(count($styles)===0)
@else
<br/>
<label for="size"><h6>Style</h6> </label><br/>
@foreach ($styles as $key=>$style)
    <input type="radio" id="test_<?php echo $key; ?>" name="style">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $style }}</label>
@endforeach
@endif
<!-- style check End -->
<!-- For colors Checkout -->
@if(count($colors)===0)
@else
<br/>
<label for="size"><h6>Colors</h6> </label><br/>
@foreach ($colors as $key=>$color)
    <input type="radio" id="test_<?php echo $key; ?>" name="color">
    <label class="ab_custom_field" for="test_<?php echo $key; ?>">{{ $color }}</label>
@endforeach
@endif
<!-- colors check End -->