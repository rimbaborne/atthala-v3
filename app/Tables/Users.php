<?php

namespace App\Tables;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Str;

class Users extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //...
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return User::class;
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table->withGlobalSearch(columns:['name', 'email','phone_number'])

            ->rowLink(fn (User $user) => route('superadmin.users.show', $user))
            ->selectFilter('Kota', [
                'en' => 'Balikpapan',
                'nl' => 'Luar Balikpapan',
            ])
            ->export()
            ->column('phone_number')
            ->column('name')
            ->column('email')
            ->column(
                label:'Dibuat',
                key: 'data',
                as: function (User $user) {
                    $a = $user->created_at->format('d M Y');
                    return $a;
                }
            )
            ->paginate(10);
    }
}
