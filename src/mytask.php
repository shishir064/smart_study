<?php include '../backend/fetchtask.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard</title>
</head>

<body class="bg-slate-50 text-slate-900">
    <header class="text-gray-600 bg-white top-0 body-font px-4 sm:px-8 z-10 sticky shadow-md">
        <div class="container mx-auto flex flex-wrap p-5 justify-between md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <i class="ri-pen-nib-fill text-2xl"></i>
                <span class="ml-3 text-2xl">Smart Study</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <div class="drawer drawer-end">
                    <input id="my-drawer-5" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <label for="my-drawer-5" class="drawer-button btn ">Menu<button>
                        <i class="ri-menu-line 2xl"></i></button></label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer-5" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu bg-base-200 min-h-full w-80 p-4">

                            <li class="py-2 "><a href="../index.html"><i class="ri-home-line"></i> Home</a></li>
                            <li class="py-2 "><a><i class="ri-settings-3-line"></i> Settings</a></li>
                            <li>
                                <form action="../backend/logout.php" method="POST">
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to logout?')"
                                    class="py-2 rounded-lg flex items-center gap-1">
                                    <i class="ri-logout-box-line"></i> Logout
                                </button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </header>

    <main class="flex-1 w-full">
        <div class="max-w-8xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <aside class="bg-white rounded-xl shadow p-6 h-full">
                    <ul class="space-y-4 font-medium">
                        <li class="text-black hover:text-gray-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="text-black hover:text-gray-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="mytask.php">My tasks</a>
                        </li>
                        <li class="text-black hover:text-gray-500 flex items-center gap-2">
                            <i class="ri-dashboard-line"></i>
                            <a href="profile.php">Profile</a>
                        </li>
                    </ul>
                </aside>

                <section class="lg:col-span-3 space-y-6">

                    <div class="flex justify-between">
              <h1 class="text-black text-4xl font-semibold  px-3 py-4 rounded-lg ">Task List</h1>
              <button
                onclick="openModal()"
                class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700 flex items-center gap-2">
                <i class="ri-add-line"></i> Add Task
              </button>
            </div>
            <div class="bg-white rounded-xl shadow p-4">
              <div class="bg-white rounded-xl shadow overflow-hidden">
             <div class="relative overflow-x-auto min-h-[420px] max-h-[420px] -mx-4 sm:mx-0">
             <table class="min-w-[900px] w-full text-sm text-left text-gray-700">
            <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
            <tr>
                <th scope="col" class="p-4">
                   
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    S.N
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Topic
                </th>
                <th scope="col" class="px-6  py-3 font-medium">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Start Date
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    End Date
                </th>
                <th scope="col" class="px-6 py-3  font-medium">
                    Action
                </th>
                <th scope="col" class="px-6 py-3  font-medium">
                    Mark as Complete
                </th>
            </tr>
        </thead>


        <tbody>
        <?php if ($result->num_rows > 0): ?>
    <?php $sn = 1; while ($row = $result->fetch_assoc()): ?>
    <tr id="row-<?= $row['task_id']; ?>" class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">

        
        <td class="w-4 p-4 text-center">
            <form action="../backend/update_status.php" method="POST">
                <input type="hidden" name="task_id" value="<?= $row['task_id']; ?>">
            </form>
        </td>

        
        <td class="px-6 py-4 font-medium">
            <?= $sn++; ?>
        </td>

        
        <td class="px-6 py-4 font-semibold">
            <?= htmlspecialchars($row['title']); ?>
        </td>

        
        <td class="px-6 py-4 text-gray-600">
            <?= htmlspecialchars($row['description']); ?>
        </td>

        
        <td class="px-6 py-4">
            <?= htmlspecialchars($row['subject'] ?? '—'); ?>
        </td>

        
        <td class="px-6 py-4">
          <span  id="status-<?= $row['task_id']; ?>" class="px-3 py-1 text-xs rounded-full
          <?= $row['status'] === 'completed'? 'bg-green-100 text-green-700': 'bg-yellow-100 text-yellow-700'; ?>">
          <?= ucfirst($row['status']); ?>
         </span>
        </td>


        
        <td class="px-6 py-4 text-gray-500">
            <?= $row['start_date']; ?>
        </td>

       
        <td class="px-6 py-4 text-gray-500">
            <?= $row['end_date']; ?>
        </td>

        
        <td class="px-6 py-4 flex gap-4">
            <button
                  onclick="openEditModal(
                  <?= $row['task_id']; ?>,
                  '<?= htmlspecialchars($row['title'], ENT_QUOTES); ?>',
                  '<?= htmlspecialchars($row['description'], ENT_QUOTES); ?>',
                  '<?= htmlspecialchars($row['subject'], ENT_QUOTES); ?>',
                  '<?= $row['start_date']; ?>',
                  '<?= $row['end_date']; ?>'
  )"
                class="text-blue-500 hover:underline">
                Edit
            </button>

            <form action="../backend/delete_task.php" method="POST">
                <input type="hidden" name="task_id" value="<?= $row['task_id']; ?>">
                <button onclick="return confirm('Delete this task?')"
                        class="text-red-500 hover:underline">
                    Remove
                </button>
            </form>
        </td>

       
        <td class="px-6 py-4">
         <?php if ($row['status'] === 'pending'): ?>
         <button onclick="completeTask(<?= $row['task_id']; ?>)" class="text-green-600 hover:underline font-medium">
         Mark as Complete
         </button>
         <?php else: ?>-
         <?php endif; ?>
        </td>


    </tr>
    <?php endwhile; ?>
<?php else: ?>
    <tr>
        <td colspan="10" class="text-center py-10 text-gray-500">
            No tasks found. Add your first task.
        </td>
    </tr>
<?php endif; ?>
</tbody>


    </table>
  </div>
</div>

    <div id="taskModal" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">
      <div class="bg-white rounded-xl w-full max-w-md p-6">
        <h2 class="text-xl font-semibold mb-4">Add New Task</h2>

        <form action="../backend/tasks.php" method="POST">
          <div class="space-y-2">
              <label for="taskTitle" class="text-sm font-medium">Topic *</label>
              <input type="text" name="topic" id="taskTitle" required class="w-full px-3 py-2 rounded-lg border border-input bg-[#F7FAFF] focus:outline-none" placeholder="Enter task title"/>
            </div>

            <div class="space-y-2">
              <label for="taskDescription" class="text-sm font-medium">Description</label>
              <textarea id="taskDescription" rows="3" name="task_des"
                class="w-full px-3 py-2 rounded-lg border border-input bg-[#F7FAFF] focus:outline-none"
                placeholder="Add task details..."
              ></textarea>
            </div>

            <div class="space-y-2">
              <label for="taskSubject" class="text-sm font-medium">Subject *</label>
              <input type="text" id="taskSubject" name="subject" class="w-full px-3 py-2 rounded-lg border bg-[#F7FAFF] focus:outline-none" placeholder="e.g., Mathematics, Science"/>
            </div>

            <div class="space-y-2">
              <label for="taskDueDate" class="text-sm font-medium" >Start Date *</label>
              <input type="date" id="taskDueDate" name="start_date" class="w-full px-3 py-2 rounded-lg border bg-[#F7FAFF] focus:outline-none"/>
            </div>
            <div class="space-y-2">
              <label for="taskDueDate" class="text-sm font-medium" >End Date *</label>
              <input type="date" id="taskDueDate" name="end_date" class="w-full px-3 py-2 rounded-lg border bg-[#F7FAFF] focus:outline-none"/>
            </div>

          <div class="flex justify-end gap-3 mt-6">
            <button type="button" onclick="closeModal()" class="px-4 py-2 border rounded-lg">
              Cancel
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
              Add Task
            </button>
          </div>
        </form>
      </div>
    </div>

    <div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-xl w-full max-w-md p-6">
    <h2 class="text-xl font-semibold mb-4">Edit Task</h2>

    <form action="../backend/edit_task.php" method="POST">
      <input type="hidden" name="task_id" id="edit_id">

      Topic *<input id="edit_title" name="task_title" placeholder="Edit your topic" 
        class="w-full mb-3 px-3 py-2 border rounded-lg bg-[#F7FAFF]" required>

      Description *<textarea id="edit_description" name="task_dis" placeholder="Edit your details"
        class="w-full mb-3 px-3 py-2 border rounded-lg bg-[#F7FAFF]"></textarea>

      Subject *<input id="edit_subject" name="subject" placeholder="Edit your subject"
        class="w-full mb-4 px-3 py-2 border rounded-lg bg-[#F7FAFF]">

      Start Date *<input id="edit_start_date" type="date" name="start_date" placeholder="Edit your subject"
        class="w-full mb-4 px-3 py-2 border rounded-lg bg-[#F7FAFF]">

      End Date *<input id="edit_end_date" type="date" name="end_date" placeholder="Edit your subject" class="w-full mb-4 px-3 py-2 border rounded-lg bg-[#F7FAFF]">

      <div class="flex justify-end gap-3">
        <button type="button" onclick="closeEditModal()"
          class="px-4 py-2 border rounded-lg">Cancel</button>

        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">
          Save
        </button>
      </div>
    </form>
  </div>
</div>

  <script src="script.js"></script>

  <script>
    function completeTask(task_id) {
    fetch('../backend/complete_task.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'task_id=' + task_id
    })
    .then(res => res.text())
    .then(() => {
        // Update status badge
        const status = document.getElementById('status-' + task_id);
        if (status) {
            status.textContent = 'Completed';
            status.className =
              'px-3 py-1 text-xs rounded-full bg-green-100 text-green-700';
        }

        // Remove row after 2 seconds
        setTimeout(() => {
            const row = document.getElementById('row-' + task_id);
            if (row) row.remove();
        }, 1000);
    });
}

function openEditModal(id, title, description, subject, startDate, endDate) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_title').value = title;
    document.getElementById('edit_description').value = description;
    document.getElementById('edit_subject').value = subject;
    document.getElementById('edit_start_date').value = startDate;
    document.getElementById('edit_end_date').value = endDate;

    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}

  function openModal() {
    const modal = document.getElementById('taskModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
  }

  function closeModal() {
    const modal = document.getElementById('taskModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }



  </script>


                        

</body>

</html>
