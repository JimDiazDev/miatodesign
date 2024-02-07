<fieldset>
    <legend>project data</legend>

    <label for="name">Name:</label>
    <input type="text" id="name" name="property[name]" placeholder="Proyect title" value="<?php echo s($property->name); ?>">

    <label for="description">Description:</label>
    <textarea id="description" name="property[description]"><?php echo s($property->description); ?></textarea>

    <label for="concept">Concept:</label>
    <input type="text" id="concept" name="property[concept]" placeholder="Construction Plans, 3D Models, Rederings" value="<?php echo s($property->concept); ?>">

    <select name="property[type]">
        <option value="">-- Project Type --</option>
        <option <?php echo s($property->type) === '1' ? 'selected' : ''; ?> value="1">Commercial</option>
        <option <?php echo s($property->type) === '2' ? 'selected' : ''; ?> value="2">Residential</option>
    </select>

    <label for="date">Date:</label>
    <input type="date" id="date" name="property[date]" value="<?php echo s($property->date); ?>">

    <select name="property[direction]">
        <option value="">--Direction--</option>
        <option <?php echo s($property->direction) === '1' ? 'selected' : ''; ?> value="1">Right</option>
        <option <?php echo s($property->direction) === '2' ? 'selected' : ''; ?> value="2">Left</option>
    </select>

</fieldset>
<fieldset>
    <legend>Espanish Data</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="property[nombre]" placeholder="Titulo del proyecto" value="<?php echo s($property->nombre); ?>">

    <label for="descripcion">Descripcion:</label>
    <textarea id="descripcion" name="property[descripcion]"><?php echo s($property->descripcion); ?></textarea>

    <label for="concepto">Concepto:</label>
    <input type="text" id="concepto" name="property[concepto]" placeholder="Planos de contruccion, Modelos 3D, Rederings" value="<?php echo s($property->concepto); ?>">

</fieldset>
<fieldset>
    <legend>Construction Plans</legend>

    <label for="planOne" class="custom-file-input">One:</label>
    <input type="file" id="planOne" accept="image/jpeg, image/png" name="planOne">

    <?php if(!empty($property->planOne)): ?>
        <img class="small_image" src="../../images/<?php echo $property->planOne ?>" alt="first plane">
    <?php endif; ?>

    <label for="planTwo" class="custom-file-input">Two:</label>
    <input type="file" id="planTwo" accept="image/jpeg, image/png" name="planTwo">

    <?php if(!empty($property->planTwo)): ?>
        <img class="small_image" src="../../images/<?php echo $property->planTwo ?>" alt="second plane">
    <?php endif; ?>

    <label for="planThree" class="custom-file-input">Three:</label>
    <input type="file" id="planThree" accept="image/jpeg, image/png" name="planThree">

    <?php if(!empty($property->planThree)): ?>
        <img class="small_image" src="../../images/<?php echo $property->planThree ?>" alt="third plane">
    <?php endif; ?>

    <label for="planFour" class="custom-file-input">Four:</label>
    <input type="file" id="planFour" accept="image/jpeg, image/png" name="planFour">

    <?php if(!empty($property->planFour)): ?>
        <img class="small_image" src="../../images/<?php echo $property->planFour ?>" alt="fourth plane">
    <?php endif; ?>

    <label for="planFive" class="custom-file-input">Five:</label>
    <input type="file" id="planFive" accept="image/jpeg, image/png" name="planFive">

    <?php if(!empty($property->planFive)): ?>
        <img class="small_image" src="../../images/<?php echo $property->planFive ?>" alt="fifth plane">
    <?php endif; ?>

</fieldset>
<fieldset>
    <legend>3d models</legend>

    <label for="modelOne">One:</label>
    <input type="file" id="modelOne" accept="image/jpeg, image/png" name="modelOne">

    <?php if(!empty($property->modelOne)): ?>
        <img class="small_image" src="../../images/<?php echo $property->modelOne ?>" alt="first model">
    <?php endif; ?>

    <label for="modelTwo">Two:</label>
    <input type="file" id="modelTwo" accept="image/jpeg, image/png" name="modelTwo">

    <?php if(!empty($property->modelTwo)): ?>
        <img class="small_image" src="../../images/<?php echo $property->modelTwo ?>" alt="second model">
    <?php endif; ?>

    <label for="modelThree">Three:</label>
    <input type="file" id="modelThree" accept="image/jpeg, image/png" name="modelThree">

    <?php if(!empty($property->modelThree)): ?>
        <img class="small_image" src="../../images/<?php echo $property->modelThree ?>" alt="third model">
    <?php endif; ?>

    <label for="modelFour">Four:</label>
    <input type="file" id="modelFour" accept="image/jpeg, image/png" name="modelFour">

    <?php if(!empty($property->modelFour)): ?>
        <img class="small_image" src="../../images/<?php echo $property->modelFour ?>" alt="fourth model">
    <?php endif; ?>

    <label for="modelFive">Five:</label>
    <input type="file" id="modelFive" accept="image/jpeg, image/png" name="modelFive">

    <?php if(!empty($property->modelFive)): ?>
        <img class="small_image" src="../../images/<?php echo $property->modelFive ?>" alt="fifth model">
    <?php endif; ?>

</fieldset>
<fieldset>
    <legend>Renderings</legend>

    <label for="renderingOne">One:</label>
    <input type="file" id="renderingOne" accept="image/jpeg, image/png" name="renderingOne">

    <?php if(!empty($property->renderingOne)): ?>
        <img class="small_image" src="../../images/<?php echo $property->renderingOne ?>" alt="first rendering">
    <?php endif; ?>

    <label for="renderingTwo">Two:</label>
    <input type="file" id="renderingTwo" accept="image/jpeg, image/png" name="renderingTwo">

    <?php if(!empty($property->renderingTwo)): ?>
        <img class="small_image" src="../../images/<?php echo $property->renderingTwo ?>" alt="second rendering">
    <?php endif; ?>

    <label for="renderingThree">Three:</label>
    <input type="file" id="renderingThree" accept="image/jpeg, image/png" name="renderingThree">

    <?php if(!empty($property->renderingThree)): ?>
        <img class="small_image" src="../../images/<?php echo $property->renderingThree ?>" alt="third rendering">
    <?php endif; ?>

    <label for="renderingFour">Four:</label>
    <input type="file" id="renderingFour" accept="image/jpeg, image/png" name="renderingFour">

    <?php if(!empty($property->renderingFour)): ?>
        <img class="small_image" src="../../images/<?php echo $property->renderingFour ?>" alt="fourth rendering">
    <?php endif; ?>

    <label for="renderingFive">Five:</label>
    <input type="file" id="renderingFive" accept="image/jpeg, image/png" name="renderingFive">

    <?php if(!empty($property->renderingFive)): ?>
        <img class="small_image" src="../../images/<?php echo $property->renderingFive ?>" alt="fifth rendering">
    <?php endif; ?>

</fieldset>