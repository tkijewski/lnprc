<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace GPBMetadata;

class Walletkit
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Lightning::initOnce();
        \GPBMetadata\Signrpc\Signer::initOnce();
        $pool->internalAddGeneratedFile(
            '
�>
walletkit.proto	walletrpcsignrpc/signer.proto"e
ListUnspentRequest
	min_confs (
	max_confs (
account (	
unconfirmed_only ("1
ListUnspentResponse
utxos (2.lnrpc.Utxo"_
LeaseOutputRequest

id (!
outpoint (2.lnrpc.OutPoint
expiration_seconds (")
LeaseOutputResponse

expiration ("E
ReleaseOutputRequest

id (!
outpoint (2.lnrpc.OutPoint"
ReleaseOutputResponse"6
KeyReq
key_finger_print (

key_family ("T
AddrRequest
account (	$
type (2.walletrpc.AddressType
change ("
AddrResponse
addr (	"�
Account
name (	,
address_type (2.walletrpc.AddressType
extended_public_key (	
master_key_fingerprint (
derivation_path (	
external_key_count (
internal_key_count (

watch_only ("H
AddressProperty
address (	
is_internal (
balance ("�
AccountWithAddresses
name (	,
address_type (2.walletrpc.AddressType
derivation_path (	-
	addresses (2.walletrpc.AddressProperty"Q
ListAccountsRequest
name (	,
address_type (2.walletrpc.AddressType"<
ListAccountsResponse$
accounts (2.walletrpc.Account"<
RequiredReserveRequest"
additional_public_channels ("3
RequiredReserveResponse
required_reserve ("J
ListAddressesRequest
account_name (	
show_custom_accounts ("X
ListAddressesResponse?
account_with_addresses (2.walletrpc.AccountWithAddresses"7
SignMessageWithAddrRequest
msg (
addr (	"0
SignMessageWithAddrResponse
	signature (	"L
VerifyMessageWithAddrRequest
msg (
	signature (	
addr (	">
VerifyMessageWithAddrResponse
valid (
pubkey ("�
ImportAccountRequest
name (	
extended_public_key (	
master_key_fingerprint (,
address_type (2.walletrpc.AddressType
dry_run ("|
ImportAccountResponse#
account (2.walletrpc.Account
dry_run_external_addrs (	
dry_run_internal_addrs (	"Z
ImportPublicKeyRequest

public_key (,
address_type (2.walletrpc.AddressType"
ImportPublicKeyResponse"�
ImportTapscriptRequest
internal_public_key (1
	full_tree (2.walletrpc.TapscriptFullTreeH ;
partial_reveal (2!.walletrpc.TapscriptPartialRevealH 
root_hash_only (H 
full_key_only (H B
script";
TapscriptFullTree&

all_leaves (2.walletrpc.TapLeaf"/
TapLeaf
leaf_version (
script ("a
TapscriptPartialReveal)
revealed_leaf (2.walletrpc.TapLeaf
full_inclusion_proof ("/
ImportTapscriptResponse
p2tr_address (	",
Transaction
tx_hex (
label (	"(
PublishResponse
publish_error (	"�
SendOutputsRequest

sat_per_kw (
outputs (2.signrpc.TxOut
label (	
	min_confs (
spend_unconfirmed ("%
SendOutputsResponse
raw_tx (")
EstimateFeeRequest
conf_target (")
EstimateFeeResponse

sat_per_kw ("�
PendingSweep!
outpoint (2.lnrpc.OutPoint,
witness_type (2.walletrpc.WitnessType

amount_sat (
sat_per_byte (B
broadcast_attempts (
next_broadcast_height (
requested_conf_target ("
requested_sat_per_byte	 (B
sat_per_vbyte
 (
requested_sat_per_vbyte (
force ("
PendingSweepsRequest"H
PendingSweepsResponse/
pending_sweeps (2.walletrpc.PendingSweep"�
BumpFeeRequest!
outpoint (2.lnrpc.OutPoint
target_conf (
sat_per_byte (B
force (
sat_per_vbyte ("
BumpFeeResponse"$
ListSweepsRequest
verbose ("�
ListSweepsResponse8
transaction_details (2.lnrpc.TransactionDetailsH G
transaction_ids (2,.walletrpc.ListSweepsResponse.TransactionIDsH )
TransactionIDs
transaction_ids (	B
sweeps"I
LabelTransactionRequest
txid (
label (	
	overwrite ("
LabelTransactionResponse"�
FundPsbtRequest
psbt (H $
raw (2.walletrpc.TxTemplateH 
target_conf (H
sat_per_vbyte (H
account (	
	min_confs (
spend_unconfirmed (1
change_type (2.walletrpc.ChangeAddressTypeB

templateB
fees"p
FundPsbtResponse
funded_psbt (
change_output_index (*
locked_utxos (2.walletrpc.UtxoLease"�

TxTemplate
inputs (2.lnrpc.OutPoint3
outputs (2".walletrpc.TxTemplate.OutputsEntry.
OutputsEntry
key (	
value (:8"p
	UtxoLease

id (!
outpoint (2.lnrpc.OutPoint

expiration (
	pk_script (
value ("&
SignPsbtRequest
funded_psbt (">
SignPsbtResponse
signed_psbt (
signed_inputs (";
FinalizePsbtRequest
funded_psbt (
account (	"A
FinalizePsbtResponse
signed_psbt (
raw_final_tx ("
ListLeasesRequest"@
ListLeasesResponse*
locked_utxos (2.walletrpc.UtxoLease*�
AddressType
UNKNOWN 
WITNESS_PUBKEY_HASH
NESTED_WITNESS_PUBKEY_HASH%
!HYBRID_NESTED_WITNESS_PUBKEY_HASH
TAPROOT_PUBKEY*�
WitnessType
UNKNOWN_WITNESS 
COMMITMENT_TIME_LOCK
COMMITMENT_NO_DELAY
COMMITMENT_REVOKE
HTLC_OFFERED_REVOKE
HTLC_ACCEPTED_REVOKE%
!HTLC_OFFERED_TIMEOUT_SECOND_LEVEL&
"HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL
HTLC_OFFERED_REMOTE_TIMEOUT 
HTLC_ACCEPTED_REMOTE_SUCCESS	
HTLC_SECOND_LEVEL_REVOKE

WITNESS_KEY_HASH
NESTED_WITNESS_KEY_HASH
COMMITMENT_ANCHOR!
COMMITMENT_NO_DELAY_TWEAKLESS"
COMMITMENT_TO_REMOTE_CONFIRMED5
1HTLC_OFFERED_TIMEOUT_SECOND_LEVEL_INPUT_CONFIRMED6
2HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL_INPUT_CONFIRMED
LEASE_COMMITMENT_TIME_LOCK(
$LEASE_COMMITMENT_TO_REMOTE_CONFIRMED+
\'LEASE_HTLC_OFFERED_TIMEOUT_SECOND_LEVEL,
(LEASE_HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL
TAPROOT_PUB_KEY_SPEND*V
ChangeAddressType#
CHANGE_ADDRESS_TYPE_UNSPECIFIED 
CHANGE_ADDRESS_TYPE_P2TR2�
	WalletKitL
ListUnspent.walletrpc.ListUnspentRequest.walletrpc.ListUnspentResponseL
LeaseOutput.walletrpc.LeaseOutputRequest.walletrpc.LeaseOutputResponseR
ReleaseOutput.walletrpc.ReleaseOutputRequest .walletrpc.ReleaseOutputResponseI

ListLeases.walletrpc.ListLeasesRequest.walletrpc.ListLeasesResponse:
DeriveNextKey.walletrpc.KeyReq.signrpc.KeyDescriptor8
	DeriveKey.signrpc.KeyLocator.signrpc.KeyDescriptor;
NextAddr.walletrpc.AddrRequest.walletrpc.AddrResponseO
ListAccounts.walletrpc.ListAccountsRequest.walletrpc.ListAccountsResponseX
RequiredReserve!.walletrpc.RequiredReserveRequest".walletrpc.RequiredReserveResponseR
ListAddresses.walletrpc.ListAddressesRequest .walletrpc.ListAddressesResponsed
SignMessageWithAddr%.walletrpc.SignMessageWithAddrRequest&.walletrpc.SignMessageWithAddrResponsej
VerifyMessageWithAddr\'.walletrpc.VerifyMessageWithAddrRequest(.walletrpc.VerifyMessageWithAddrResponseR
ImportAccount.walletrpc.ImportAccountRequest .walletrpc.ImportAccountResponseX
ImportPublicKey!.walletrpc.ImportPublicKeyRequest".walletrpc.ImportPublicKeyResponseX
ImportTapscript!.walletrpc.ImportTapscriptRequest".walletrpc.ImportTapscriptResponseH
PublishTransaction.walletrpc.Transaction.walletrpc.PublishResponseL
SendOutputs.walletrpc.SendOutputsRequest.walletrpc.SendOutputsResponseL
EstimateFee.walletrpc.EstimateFeeRequest.walletrpc.EstimateFeeResponseR
PendingSweeps.walletrpc.PendingSweepsRequest .walletrpc.PendingSweepsResponse@
BumpFee.walletrpc.BumpFeeRequest.walletrpc.BumpFeeResponseI

ListSweeps.walletrpc.ListSweepsRequest.walletrpc.ListSweepsResponse[
LabelTransaction".walletrpc.LabelTransactionRequest#.walletrpc.LabelTransactionResponseC
FundPsbt.walletrpc.FundPsbtRequest.walletrpc.FundPsbtResponseC
SignPsbt.walletrpc.SignPsbtRequest.walletrpc.SignPsbtResponseO
FinalizePsbt.walletrpc.FinalizePsbtRequest.walletrpc.FinalizePsbtResponseB1Z/github.com/lightningnetwork/lnd/lnrpc/walletrpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

