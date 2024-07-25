@extends('layouts.visiteur')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Combien souhaitez-vous donner ?</h2>
            <form method="POST" id="donForm" action="{{ route('ajouter_don.taitement') }}" class="text-center bg-light p-5 rounded shadow-sm">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg mx-auto mb-3" id="amount" name="amount" readonly placeholder="Montant du don" style="max-width: 300px;">
                    <div id="amountButtons" class="mt-3 d-flex justify-content-around flex-wrap">
                        <button type="button" class="btn btn-success btn-xxl amount-btn m-2" data-amount="1000">1000 fcfa</button>
                        <button type="button" class="btn btn-success btn-xxl amount-btn m-2" data-amount="2000">2000 fcfa</button>
                        <button type="button" class="btn btn-success btn-xxl amount-btn m-2" data-amount="5000">5000 fcfa</button>
                        <button type="button" class="btn btn-success btn-xxl amount-btn m-2" data-amount="10000">10000 fcfa</button>
                        <button type="button" class="btn btn-success btn-xxl amount-btn m-2" data-amount="custom">Autre montant</button>
                    </div>
                </div>
                <div class="form-group" id="customAmount" style="display: none;">
                    <input type="number" class="form-control form-control-lg mx-auto mb-3" id="custom" name="custom" min="1" placeholder="Montant personnalisé" style="max-width: 300px;">
                </div>

                <h3 class="mt-5 mb-4">Qui est l'heureux donateur ?</h3>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg mx-auto mb-3" id="donatorEmail" name="donatorEmail" required placeholder="Email" style="max-width: 400px;">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg mx-auto mb-3" id="firstName" name="firstName" required placeholder="Prénom" style="max-width: 400px;">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg mx-auto mb-3" id="lastName" name="lastName" required placeholder="Nom" style="max-width: 400px;">
                </div>

                <h3 class="mt-5 mb-4">Mode de paiement</h3>
                <div class="form-group">
                    <select class="form-control form-control-lg mx-auto mb-3" id="paymentMethod" name="paymentMethod" style="max-width: 300px;">
                        <option value="">Choisissez un mode de paiement</option>
                        <option value="paypal">PayPal</option>
                        <option value="tmoney">TMoney</option>
                    </select>
                </div>

                <div id="paypalPayment" class="payment-method" style="display: none;">
                    <div class="form-group">
                        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" alt="PayPal" class="mb-3" style="width: 100px;">
                        <input type="email" class="form-control form-control-lg mx-auto mb-3" id="paypalEmail" name="paypalEmail" placeholder="Email PayPal" style="max-width: 400px;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg mx-auto mb-3" id="cardNumber" name="cardNumber" placeholder="Numéro de carte" style="max-width: 400px;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg mx-auto mb-3" id="cvc" name="cvc" placeholder="CVC" style="max-width: 400px;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg mx-auto mb-3" id="expiryDate" name="expiryDate" placeholder="Date d'expiration" style="max-width: 400px;">
                    </div>
                </div>

                <div id="tmoneyPayment" class="payment-method" style="display: none;">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg mx-auto mb-3" id="tmoneyNumber" name="tmoneyNumber" placeholder="Numéro TMoney" style="max-width: 400px;">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg mx-auto mb-3" id="tmoneyCode" name="tmoneyCode" placeholder="Code secret TMoney" style="max-width: 400px;">
                    </div>
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5">Donner maintenant</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.amount-btn').forEach(button => {
            button.addEventListener('click', function() {
                const amount = this.getAttribute('data-amount');
                if (amount === 'custom') {
                    document.getElementById('customAmount').style.display = 'block';
                    document.getElementById('amount').value = '';
                } else {
                    document.getElementById('customAmount').style.display = 'none';
                    document.getElementById('amount').value = amount;
                }
            });
        });

        document.getElementById('custom').addEventListener('input', function() {
            document.getElementById('amount').value = this.value;
        });

        document.getElementById('paymentMethod').addEventListener('change', function() {
            const paypalPayment = document.getElementById('paypalPayment');
            const tmoneyPayment = document.getElementById('tmoneyPayment');
            if (this.value === 'paypal') {
                paypalPayment.style.display = 'block';
                tmoneyPayment.style.display = 'none';
            } else if (this.value === 'tmoney') {
                paypalPayment.style.display = 'none';
                tmoneyPayment.style.display = 'block';
            } else {
                paypalPayment.style.display = 'none';
                tmoneyPayment.style.display = 'none';
            }
        });

        document.getElementById('donForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi réel du formulaire pour cette démo

            // Vérifie si tous les champs sont renseignés
            const amount = document.getElementById('amount').value;
            const email = document.getElementById('donatorEmail').value;
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const paymentMethod = document.getElementById('paymentMethod').value;

            if (amount && email && firstName && lastName && paymentMethod) {
                // Affiche le popup de confirmation
                Swal.fire({
                    icon: 'success',
                    title: 'Merci !',
                    text: 'Votre don a été bien effectué.',
                    showConfirmButton: false,
                    timer: 3000
                });
            } else {
                // Affiche un message d'erreur si des champs sont vides
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Veuillez remplir tous les champs.',
                });
            }
        });
    </script>
@endsection
