<div>
    <div>

    
    </div>
    <?php
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class RetakeSchedule extends Model
    {
        protected $table = 'retake_schedule';
        
        protected $fillable = ['fio_teacher', 'date', 'time']; // Список столбцов, которые можно массово присваивать
    }
    $retakeSchedules = RetakeSchedule::all();
    ?>
    ghbdtn
</div>
