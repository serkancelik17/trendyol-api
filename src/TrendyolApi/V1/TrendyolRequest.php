<?php

namespace TrendyolApi\V1;

use App\Libraries\Models\Parameter;
use TrendyolApi\V1\Order\Order\Request\QueryParameter;
use App\Libraries\Models\Request\Authorization\BasicAuthorization;
use App\Libraries\Models\Request\Authorization\IAuthorization;
use App\Libraries\Models\Request\BaseRequest;
use App\Libraries\Models\Request\Header;
use App\Libraries\Models\Request\IRequest;
use App\Libraries\Models\Request\Url;

abstract class TrendyolRequest extends BaseRequest
{
    private int $supplierId = 104967;
    private string $userName = "zpEYe8qpnB6g05D34IwK";
    private string $password = "OLRyhXRHmEUIjuvWJgxG";

    public function __construct(string $endPoint, QueryParameter $queryParameters = null)
    {
        //Supplier ID varsa degistir
        $endPoint = str_replace(['{supplierId}'], [$this->supplierId], $endPoint);

        $url = new Url("https://api.trendyol.com", $endPoint, "sapigw", $queryParameters);
        parent::__construct($this->createHeader(), $this->createAuthorization(), $url);
    }

    function createHeader(): Header
    {
        $parameters[] = new Parameter("Content-Type", "application/json");
        $parameters[] = new Parameter('User-Agent', $this->supplierId . ' - SelfIntegration');

        return new Header($parameters);
    }

    function createAuthorization(): IAuthorization
    {
        return new BasicAuthorization($this->userName, $this->password);

    }

}
