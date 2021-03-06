<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationReportRowService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201811\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201811\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201811\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201811\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201811\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201811\\CommonError',
      'Date' => 'Google\\AdsApi\\AdManager\\v201811\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201811\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201811\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201811\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201811\\InternalApiError',
      'Money' => 'Google\\AdsApi\\AdManager\\v201811\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201811\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201811\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201811\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201811\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201811\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201811\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201811\\RangeError',
      'ReconciliationError' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationError',
      'ReconciliationImportError' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationImportError',
      'ReconciliationReportRow' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationReportRow',
      'ReconciliationReportRowPage' => 'Google\\AdsApi\\AdManager\\v201811\\ReconciliationReportRowPage',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201811\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201811\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201811\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201811\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201811\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201811\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201811\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201811\\TextValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v201811\\Value',
      'getReconciliationReportRowsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getReconciliationReportRowsByStatementResponse',
      'updateReconciliationReportRowsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\updateReconciliationReportRowsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201811/ReconciliationReportRowService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a {@link ReconciliationReportRowPage} of {@link ReconciliationReportRow} objects that
     * satisfy the given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code reconciliationReportId}</td>
     * <td>{@link ReconciliationReportRow#reconciliationReportId}</td>
     * </tr>
     * <tr>
     * <td>{@code advertiserId}</td>
     * <td>{@link ReconciliationReportRow#advertiserId}</td>
     * </tr>
     * <tr>
     * <td>{@code orderId}</td>
     * <td>{@link ReconciliationReportRow#orderId}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemId}</td>
     * <td>{@link ReconciliationReportRow#lineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalLineItemId}</td>
     * <td>{@link ReconciliationReportRow#proposalLineItemId}</td>
     * </tr>
     * <tr>
     * <td>{@code creativeId}</td>
     * <td>{@link ReconciliationReportRow#creativeId}</td>
     * </tr>
     * <tr>
     * <td>{@code lineItemCostType}</td>
     * <td>{@link ReconciliationReportRow#lineItemCostType}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpClicks}</td>
     * <td>{@link ReconciliationReportRow#dfpClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpImpressions}</td>
     * <td>{@link ReconciliationReportRow#dfpImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#dfpLineItemDays}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyClicks}</td>
     * <td>{@link ReconciliationReportRow#thirdPartyClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyImpressions}</td>
     * <td>{@link ReconciliationReportRow#thirdPartyImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#thirdPartyLineItemDays}</td>
     * </tr>
     * <tr>
     * <td>{@code manualClicks}</td>
     * <td>{@link ReconciliationReportRow#manualClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code manualImpressions}</td>
     * <td>{@link ReconciliationReportRow#manualImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code manualLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#manualLineItemDays}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciledClicks}</td>
     * <td>{@link ReconciliationReportRow#reconciledClicks}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciledImpressions}</td>
     * <td>{@link ReconciliationReportRow#reconciledImpressions}</td>
     * </tr>
     * <tr>
     * <td>{@code reconciledLineItemDays}</td>
     * <td>{@link ReconciliationReportRow#reconciledLineItemDays}</td>
     * </tr>
     * </table>
     *
     * The {@code reconciliationReportId} field is required and can only be combined with an
     * {@code AND} to other conditions. Furthermore, the results may only belong to
     * one {@link ReconciliationReport}.
     *
     * filter a set of reconciliation report rows
     *
     * @param \Google\AdsApi\AdManager\v201811\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201811\ReconciliationReportRowPage
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getReconciliationReportRowsByStatement(\Google\AdsApi\AdManager\v201811\Statement $filterStatement)
    {
      return $this->__soapCall('getReconciliationReportRowsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates a list of {@link ReconciliationReportRow} which belong to same
     * {@link ReconciliationReport}.
     *
     * @param \Google\AdsApi\AdManager\v201811\ReconciliationReportRow[] $reconciliationReportRows
     * @return \Google\AdsApi\AdManager\v201811\ReconciliationReportRow[]
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function updateReconciliationReportRows(array $reconciliationReportRows)
    {
      return $this->__soapCall('updateReconciliationReportRows', array(array('reconciliationReportRows' => $reconciliationReportRows)))->getRval();
    }

}
