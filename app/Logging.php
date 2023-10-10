namespace App\Logging;

use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\DB;

class DatabaseLogger extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    protected function write(array $record): void
    {
        DB::table('logs')->insert([
            'channel' => $record['channel'],
            'level' => $record['level'],
            'message' => $record['message'],
            'context' => json_encode($record['context']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
