<div id="select_type">
    <div class="form-group">
        <label class='form-label'>Nama Bisnis</label>
        <select class="form-control" name="child_id" required>
            @if ($child_selected != null && $dataAccount != null)
                @if ($dataAccount->type == $type)
                <option selected value="{{ $child_selected->id }}">{{ $child_selected->name }} (Saat ini)</option>
                @endif
            @endif
            <?php
            foreach ($child as $data) {
                $dataExit = App\Models\Partner::where('child_id', $data->id)->where('type', $type)->first();
                if ($dataExit) {
                } else {
            ?>
                <option value="<?= $data->id ?>"><?= $data->name ?></option>
            <?php
                }
            }
            ?>
        </select>
    </div>
</div>
