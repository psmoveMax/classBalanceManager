<?
class BalanceManager {
    // Функция для списания баланса
    public function debitBalance(&$balance, $amount) {
        if ($amount > 0 && $balance >= $amount) {
            $balance -= $amount;
            return true; // успешное списание
        }
        return false; // недостаточно средств или неверная сумма
    }

    // Функция для зачисления баланса
    public function creditBalance(&$balance, $amount) {
        if ($amount > 0) {
            $balance += $amount;
            return true; // успешное зачисление
        }
        return false; // неверная сумма
    }
}

// Пример использования:
$balance = 100.12345678;
$manager = new BalanceManager();

$manager->debitBalance($balance, 10.12345678);  // списать 10.12345678
$manager->creditBalance($balance, 50.87654321); // зачислить 50.87654321

echo "Текущий баланс: $balance";

?>
