<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Hotel> $hotels
 * @property-read int|null $hotels_count
 * @method static \Database\Factories\CityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|City withoutTrashed()
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Hotel> $hotels
 * @property-read int|null $hotels_count
 * @method static \Database\Factories\CountryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country withoutTrashed()
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $thumbnail
 * @property string $address
 * @property string $link_gmaps
 * @property int $start_level
 * @property int $city_id
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Country $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\HotelPhoto> $photos
 * @property-read int|null $photos_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\HotelRoom> $rooms
 * @property-read int|null $rooms_count
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereLinkGmaps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereStartLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel withoutTrashed()
 */
	class Hotel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $proof
 * @property string $checkin_at
 * @property string $checkout_at
 * @property int $total_days
 * @property int $total_amount
 * @property int $user_id
 * @property int $hotel_id
 * @property int $is_paid
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $customer
 * @property-read \App\Models\Hotel $hotel
 * @property-read \App\Models\HotelRoom|null $room
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereCheckinAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereCheckoutAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereProof($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereTotalDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelBooking withoutTrashed()
 */
	class HotelBooking extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $photo
 * @property int $hotel_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelPhoto withoutTrashed()
 */
	class HotelPhoto extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $photo
 * @property int $price
 * @property int $total_people
 * @property int $hotel_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom whereTotalPeople($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelRoom withoutTrashed()
 */
	class HotelRoom extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $avatar
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent {}
}

