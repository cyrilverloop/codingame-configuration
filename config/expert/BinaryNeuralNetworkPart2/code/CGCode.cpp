#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int tests;
    int training_sets;
    cin >> tests >> training_sets; cin.ignore();
    for (int i = 0; i < tests; i++) {
        string test_inputs;
        cin >> test_inputs; cin.ignore();
    }
    for (int i = 0; i < training_sets; i++) {
        string training_inputs;
        string expected_outputs;
        cin >> training_inputs >> expected_outputs; cin.ignore();
    }
    for (int i = 0; i < tests; i++) {

        // Write an answer using cout. DON'T FORGET THE "<< endl"
        // To debug: cerr << "Debug messages..." << endl;

        cout << "answer" << endl;
    }
}