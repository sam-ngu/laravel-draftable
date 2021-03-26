<?php


namespace Acadea\Draftable\Traits;


use Acadea\Draftable\Models\Draft;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;

trait Draftable
{

    private function getNonPayloadAttributes()
    {
        return [$this->primaryKey, self::CREATED_AT, self::UPDATED_AT];
    }


    public function drafts()
    {
        return $this->morphMany(Draft::class, 'draftable');
    }

    public function lastDraft()
    {

    }

    public function lastPublished()
    {

    }

    public function publishNow()
    {

    }

    public function scheduleToPublish($when)
    {

    }

    public static function fromDraft(Draft $draft)
    {
        // TODO: validate if draft belongs to model


        return new self($draft->payload);
    }


    public static function createDraft(array $attributes)
    {

        $model = new self($attributes);

        $attributes = $model->getAttributes();

        $excepted = Arr::except($attributes, $model->getNonPayloadAttributes());

        $reflection = new \ReflectionClass($model);

        // FIXME: how to resolve relationship methods
        $publicMethods = collect($reflection->getMethods(\ReflectionMethod::IS_PUBLIC));

        $relationshipMethods = $publicMethods
            ->filter(function (\ReflectionMethod $method) {
                $isModelMethod = $method->class === self::class;

                // relationship method does not have arg
                $hasNoArg = $method->getNumberOfParameters() === 0;

                return $isModelMethod && $hasNoArg;
            })->filter(function (\ReflectionMethod $method) {
                try{
                    $result = $method->invoke(new self());
                    return $result instanceof Relation;

                }catch (\Exception $exception){
                    return false;
                }
            })->map(function (\ReflectionMethod $method){
                // at this point $method will be relationship method
                $result = $method->invoke(new self());
                $reflection = new \ReflectionClass($result);
                return [
                    'name' => $method->getName(),
                    'type' => $reflection->getShortName(),
                ];
            });

        dd($relationshipMethods);
        $reflection->getMethods();
        dd(self::$relationResolvers);
        // FIXME: how to handle one to many?

        // FIXME: how to handle many to many?

        /** @var Draft $draft */
        $draft = $model->drafts()->create([
            'payload' => $excepted
        ]);


        return $model;


    }


    public function allDrafts()
    {

    }

    public function getDrafts($query)
    {

    }

}