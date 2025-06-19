#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int inputs;
    int outputs;
    int hidden_layers;
    int test_inputs;
    int training_examples;
    int training_iterations;
    cin >> inputs >> outputs >> hidden_layers >> test_inputs >> training_examples >> training_iterations; cin.ignore();
    for (int i = 0; i < hidden_layers; i++) {
        int nodes;
        cin >> nodes; cin.ignore();
    }
    for (int i = 0; i < test_inputs; i++) {
        string test_input;
        getline(cin, test_input);
    }
    for (int i = 0; i < training_examples; i++) {
        string training_inputs;
        string expected_outputs;
        cin >> training_inputs >> expected_outputs; cin.ignore();
    }
    for (int i = 0; i < test_inputs; i++) {

        // Write an answer using cout. DON'T FORGET THE "<< endl"
        // To debug: cerr << "Debug messages..." << endl;

        cout << "answer" << endl;
    }
}