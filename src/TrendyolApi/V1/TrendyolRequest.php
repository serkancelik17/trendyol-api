<?php

namespace Serkancelik17\TrendyolApi\V1;

use App\Libraries\Models\Parameter;
use Serkancelik17\TrendyolApi\V1\Order\Order\Request\QueryParameter;
use Serkancelik17\ApiBase\Request\Authorization\BasicAuthorization;
use Serkancelik17\ApiBase\Request\Authorization\IAuthorization;
use Serkancelik17\ApiBase\Request\BaseRequest;
use Serkancelik17\ApiBase\Request\Header;
use Serkancelik17\ApiBase\Request\IRequest;
use Serkancelik17\ApiBase\Request\Url;

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
