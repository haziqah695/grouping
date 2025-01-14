<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
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
							<li><?= $this->Html->link(__('Edit Attendance'), ['action' => 'edit', $attendance->attendance_id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Attendance'), ['action' => 'delete', $attendance->attendance_id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Attendances'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Attendance'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
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
            <h3><?= h($attendance->program_name) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Program Name') ?></th>
                    <td><?= h($attendance->program_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Day') ?></th>
                    <td><?= h($attendance->program_day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Name') ?></th>
                    <td><?= h($attendance->student_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $attendance->hasValue('student') ? $this->Html->link($attendance->student->student_name, ['controller' => 'Students', 'action' => 'view', $attendance->student->student_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Attendance Id') ?></th>
                    <td><?= $this->Number->format($attendance->attendance_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($attendance->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Program Date') ?></th>
                    <td><?= h($attendance->program_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($attendance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($attendance->modified) ?></td>
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




