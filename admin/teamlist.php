<h1>Search Team List</h1>

<?php if (!empty($teams)): ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Team ID</th>
                    <th>Team Name</th>
                    <th>Short Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teams as $team): ?>
                    <tr>
                        <td><?= htmlspecialchars($team['team_id']) ?></td>
                        <td><?= htmlspecialchars($team['team_name']) ?></td>
                        <td><?= htmlspecialchars($team['short_name']) ?></td>
                        <td><?= htmlspecialchars($team['created_at']) ?></td>
                        <td><?= htmlspecialchars($team['updated_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p>Team list not found.</p>
<?php endif; ?>