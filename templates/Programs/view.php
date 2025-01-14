<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Program $program
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
							<li><?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->program_id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->program_id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->program_id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Programs'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Program'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
            <h3><?= h($program->program_name) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Program Name') ?></th>
                    <td><?= h($program->program_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Day') ?></th>
                    <td><?= h($program->program_day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Date') ?></th>
                    <td><?= h($program->program_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faculty Course') ?></th>
                    <td><?= h($program->faculty_course) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faculty Name') ?></th>
                    <td><?= h($program->faculty_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Id') ?></th>
                    <td><?= $this->Number->format($program->program_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($program->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Time') ?></th>
                    <td><?= h($program->program_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($program->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($program->modified) ?></td>
                </tr>
            </table>
            </div>

			</div>
		</div>
		

            
            


		
	</div>
	<div class="col-md-3">
	  Column
	</div>
</div>




