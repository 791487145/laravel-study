<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 04 Sep 2019 09:26:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ActivityLog
 *
 * @property int $id
 * @property string $log_name
 * @property string $description
 * @property int $subject_id
 * @property string $subject_type
 * @property int $causer_id
 * @property string $causer_type
 * @property string $properties
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereCauserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereCauserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereLogName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ActivityLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ActivityLog extends Eloquent
{
	protected $table = 'activity_log';
	protected $primaryKey = 'id';

	protected $casts = [
		'subject_id' => 'int',
		'causer_id' => 'int'
	];

	protected $fillable = [
		'log_name',
		'description',
		'subject_id',
		'subject_type',
		'causer_id',
		'causer_type',
		'properties'
	];
}
