<ul>
<li>
<a href="<?php echo url('/welcome'); ?>">Click here to return main</a>
</li>
<li>
<a href="<?php echo route('members.show',['id' => 14]); ?>">Go to a members</a>
</li>
<li>
<a href="<?php echo route('users.comments.show', [1,2]) ?>">Option 1</a>
</li>

<li>
<a href="<?php echo route('users.comments.show', ['userId' =>1, 'commentId' =>2]) ?>">Option 2</a>
</li>

<li>
<a href="<?php echo route('users.comments.show', ['commentId' =>2, 'userId' =>1]) ?>">Option 3</a>
</li>

<li>
<a href="<?php echo route('users.comments.show', ['userId' => 1, 'commentId' => 2, 'opt' => 'a']) ?>">Option 4</a>
</li>
</ul>



