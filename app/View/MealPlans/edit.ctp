<script type="text/javascript">
    $(function() {
        $('.mealPlans .submit').hide();
    });
</script>
<div class="mealPlans form">
<?php echo $this->Form->create('MealPlan', array('default' => false, 'targetId' => 'editMealDialog')); ?>
<?php
        echo $this->Form->hidden('id');
        echo $this->Form->input('mealday');
        echo $this->Form->input('meal_name_id');
        echo $this->Form->input('recipe_id');
        echo $this->Form->input('servings');
?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->Session->flash(); ?>