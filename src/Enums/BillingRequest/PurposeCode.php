<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest;

enum PurposeCode: string
{
    case BonusPayment = 'bonus_payment';
    case CardBulkClearing = 'card_bulk_clearing';
    case CarrierGuardedWholesaleValuables = 'carrier_guarded_wholesale_valuables';
    case CashInPreCredit = 'cash_in_pre_credit';
    case CashManagementSweepAccount = 'cash_management_sweep_account';
    case CashManagementTopAccount = 'cash_management_top_account';
    case CashManagementTransfer = 'cash_management_transfer';
    case CashManagementZeroBalanceAccount = 'cash_management_zero_balance_account';
    case CashOutNotesCoins = 'cash_out_notes_coins';
    case Commercial = 'commercial';
    case Consumer = 'consumer';
    case CreditCardPayment = 'credit_card_payment';
    case CrossborderMiPayments = 'crossborder_mi_payments';
    case DebitCardPayment = 'debit_card_payment';
    case DeliverAgainstPayment = 'deliver_against_payment';
    case DependantSupport = 'dependant_support';
    case Dividend = 'dividend';
    case Epayment = 'epayment';
    case FeeCollection = 'fee_collection';
    case FeeCollectionAndInterest = 'fee_collection_and_interest';
    case ForeignCurrencyDomesticTransfer = 'foreign_currency_domestic_transfer';
    case Gambling = 'gambling';
    case Government = 'government';
    case GovernmentPayment = 'government_payment';
    case HedgingTransaction = 'hedging_transaction';
    case Interest = 'interest';
    case IntraCompanyPayment = 'intra_company_payment';
    case IrrevocableCreditCardPayment = 'irrevocable_credit_card_payment';
    case IrrevocableDebitCardPayment = 'irrevocable_debit_card_payment';
    case Loan = 'loan';
    case LockboxTransactions = 'lockbox_transactions';
    case Mortgage = 'mortgage';
    case Other = 'other';
    case OtherPayment = 'other_payment';
    case Pension = 'pension';
    case PensionPayment = 'pension_payment';
    case PersonToPersonPayment = 'person_to_person_payment';
    case Personal = 'personal';
    case ReceiveAgainstPayment = 'receive_against_payment';
    case ReimbursementReceivedCreditTransfer = 'reimbursement_received_credit_transfer';
    case Represented = 'represented';
    case Retail = 'retail';
    case Salary = 'salary';
    case SalaryPayment = 'salary_payment';
    case Securities = 'securities';
    case SocialSecurityBenefit = 'social_security_benefit';
    case SupplierPayment = 'supplier_payment';
    case Tax = 'tax';
    case TaxPayment = 'tax_payment';
    case Trade = 'trade';
    case TradeSettlementPayment = 'trade_settlement_payment';
    case TreasuryPayment = 'treasury_payment';
    case Utility = 'utility';
    case ValueAddedTaxPayment = 'value_added_tax_payment';
    case WithHolding = 'with_holding';
}
